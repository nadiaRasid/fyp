<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Matric No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Telefon</th>
                    <th>Fakulti</th>
                    <th>Persatuan</th>
                    <th>Profile Picture</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($penggunas as $pengguna)
                    <tr>
                      <td>{{ $pengguna->id }}</td>
                      <td>{{ $pengguna->user->username }}</td>
                      <td>{{ $pengguna->user->no_matrik }}</td>
                      <td>{{ $pengguna->user->email }}</td>
                      <td>{{ $pengguna->nama }}</td>
                      <td>{{ $pengguna->telefon }}</td>
                      <td>{{ $pengguna->fakulti }}</td>
                      <td>{{ $pengguna->persatuan }}</td>
                      <td>{{ $pengguna->gambar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
