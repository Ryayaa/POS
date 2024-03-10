<html>
    <body>
        <table border="1" cellpadding="2" cellsapcing="0">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Nama</td>
                <td>ID Level Pengguna</td>
            </tr>
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
                <td><a href="/user/ubah/{{$d->user_id}}">Ubah</a> | <a href="/user/hapus{{$d->user_id}}">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>