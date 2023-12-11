<!DOCTYPE html>
<html>

<head>
    <title>PeduliDiri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data Catatan Perjalanan - PeduliDiri</h5>
        <br>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($catatan as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->user->name }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->waktu }}</td>
                    <td>{{ $p->lokasi }}</td>
                    <td>{{ $p->suhu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
