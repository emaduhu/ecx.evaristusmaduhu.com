<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>QR Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($participants as $participant)
    <tr>
        <td>{{ $participant->name }}</td>
        <td>{{ $participant->email }}</td>
        <td><img src="{{ public_path($participant->qrcode) }}" width="150" height="150" ></td>
    </tr>
    @endforeach
    </tbody>
</table>
