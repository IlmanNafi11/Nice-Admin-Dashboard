<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pendidikan | Create</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100vw;
            background-color: #eeeeee;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <h2>Tambah Pendidikan</h2>

        <form action="{{ route('pendidikan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tingkatan</label>
                <select name="tingkatan" id="tingkatan" class="form-control">
                    <option value="1">TK</option>
                    <option value="2">SD</option>
                    <option value="3">SMP</option>
                    <option value="4">SMA/SMK</option>
                    <option value="5">D3</option>
                    <option value="6">D4/S1</option>
                    <option value="7">S2</option>
                    <option value="8">S3</option>

                </select>
            </div>
            <div class="mb-3">
                <label>Tahun Masuk</label>
                <input type="number" name="tahun_masuk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tahun Keluar</label>
                <input type="number" name="tahun_keluar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
