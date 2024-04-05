<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

HeadingRowFormatter::default('none');

class ParticipantsImport implements ToCollection, WithHeadingRow
{
    public function collection($collection)
    {
        foreach ($collection as $row) {

            // Generate the QR Code image
            $name = $row['Name'];
            $email = $row['Email'];
//            $qrCode = QrCode::format('png')->size(200)->generate($name);

            $qrCode = QrCode::format('png')
                ->size(150)
                ->generate($name);

            // Save the QR Code image to a file
//            $fileName = time() . '-' . $data . '.png';
            $fileName = $email . '.png';
            $directory = public_path() . '/qrcodes/';
            $filePath = $directory . $fileName;

            if (!File::isDirectory($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            // Clean up: delete the QR Code image if it exists
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            file_put_contents($directory . $fileName, $qrCode);

            // Delete
            Participant::where('email', $email)->delete();

            Participant::create([
                'name' => $row['Name'],
                'email' => $row['Email'],
                'qrcode' => '/qrcodes/' . $fileName,
            ]);
        }
    }
}
