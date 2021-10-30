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
        @foreach($siswas as $siswas2)
        Id : {{ $siswas2['id'] }} <br>
        Username : {{ $siswas2['username'] }} <br>
        Email : {{ $siswas2['email'] }} <br>
        Alamat : {{ $siswas2['alamat'] }} <br>
        Mata Pelajaran :
            <ul>
            @foreach($siswas2['mapel'] as $data)
            <li>{{$data['pelajaran']}}</li>

            @endforeach

            </ul>
        <hr>
        @endforeach
    </ul>

</body>
</html>
