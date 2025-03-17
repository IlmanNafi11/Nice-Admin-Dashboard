<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request dengan input laravel</title>
</head>

<body>
    <form action="/formulir/proses" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
