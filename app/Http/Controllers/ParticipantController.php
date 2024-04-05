<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantsExport;
use App\Imports\ExcelDataImport;
use App\Imports\ParticipantsImport;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::where('deleted_at', null)->orderBy('created_at', 'DESC')->paginate(10);

        return view('participants.index', compact('participants'));
    }

    public function create()
    {
        $editing = false;
        return view('participants.create', compact('editing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'participant_file' => 'required|mimes:pdf',
        ]);

        $file = $request->file('participant_file');
        $filePath = $file->store('uploads', 'public');

        $participant = new Participant();
        $participant->name = $request->name;
        $participant->email = $request->email;
        $participant->qrcode = $filePath;
        $participant->save();
        return redirect()->route('participants.index')->with('success', 'Participants file uploaded successfully.');
    }

    public function show($id)
    {
        $participant = Participant::where('deleted_at', null)->where('id', $id)->first();

        return view('participants.show', compact('participant'));
    }

    public function edit($id)
    {
        $this->authorize('participant.edit');
        $editing = true;
        $participant = Participant::where('deleted_at', null)->where('id', $id)->first();
        return view('participants.create', compact(['editing', 'participant']));
    }

    public function update($id, Request $request)
    {
        $this->authorize('participant.edit');

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'participant_file' => 'required|mimes:pdf',
        ]);

        $file = $request->file('participant_file');
        $filePath = $file->store('uploads', 'public');

        $participant = Participant::where('id', $id)->firstOrFail();
        $participant->name = $request->name;
        $participant->email = $request->email;
        $participant->qrcode = $filePath;
        $participant->save();
        return redirect()->route('participants.index')->with('success', 'Participants file Updated successfully.');
    }

    public function destroy($id)
    {
        $this->authorize('can.delete');

        $participant = Participant::where('id', $id)->firstOrFail();
        $participant->deleted_at = now();
        $participant->save();
        return redirect()->route('participants.index')->with("success", "Participant deleted successfully!");
    }
}
