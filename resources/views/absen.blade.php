<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tampilkan Data</h2>
    <ul>
        @foreach($data as $data2)
        NIS : {{ $data2['nis'] }} <br>
        Nama : {{ $data2['nama'] }} <br>
        Jenis Kelamin : {{ $data2['jk'] }} <br>
        Kelas : {{ $data2['kls'] }} <br>
        Alamat : {{ $data2['alamat'] }} <br>
        <hr>
        @endforeach
    </ul>

</body>
</html>
