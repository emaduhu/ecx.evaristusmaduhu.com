<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
    <tr>
        <td>{{ $role->name }}</td>
        <td>{{ $role->slug }}</td>
        <td>{{ $role->description }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
