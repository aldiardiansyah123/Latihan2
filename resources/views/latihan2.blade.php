<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach($data as $value)
    Id : {{$value->id}}<br>
    NIS : {{$value->nis}}<br>
    Nama : {{$value->nama}}<br>
    kelas : {{$value->kelas}}<br>
    jml : {{$value->jml }}<br>
    <hr>
    @endforeach
    <?php
    // foreach ($data as $key => $value) {
    //     echo $value['Nama'].'<br>';
    // }
    ?>
</body>

</html>
