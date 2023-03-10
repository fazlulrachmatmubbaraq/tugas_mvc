<table border="2">
    <tr>
        <th>Id Obat</th>
        <th>Nama Obat</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    @foreach ($obat as $o)
        <tr>
            <td>{{ $o->id }}</td>
            <td>{{ $o->nama_obat }}</td>
            <td>{{ $o->created_at }}</td>
            <td>{{ $o->updated_at }}</td>
        </tr>
    @endforeach


</table>
