<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pendidikan | Edit</title>
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
        <h2>Edit Pendidikan</h2>

        <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $pendidikan->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Tingkatan</label>
                <select name="tingkatan" id="tingkatan" class="form-control">
                    <option value="1" {{isset($pendidikan) && $pendidikan->tingkatan == 1 ? 'selected' : ''}} >TK</option>
                    <option value="2" {{isset($pendidikan) && $pendidikan->tingkatan == 2 ? 'selected' : ''}} >SD</option>
                    <option value="3" {{isset($pendidikan) && $pendidikan->tingkatan == 3 ? 'selected' : ''}} >SMP</option>
                    <option value="4" {{isset($pendidikan) && $pendidikan->tingkatan == 4 ? 'selected' : ''}} >SMA/SMK</option>
                    <option value="5" {{isset($pendidikan) && $pendidikan->tingkatan == 5 ? 'selected' : ''}} >D3</option>
                    <option value="6" {{isset($pendidikan) && $pendidikan->tingkatan == 6 ? 'selected' : ''}} >D4/S1</option>
                    <option value="7" {{isset($pendidikan) && $pendidikan->tingkatan == 7 ? 'selected' : ''}} >S2</option>
                    <option value="8" {{isset($pendidikan) && $pendidikan->tingkatan == 8 ? 'selected' : ''}} >S3</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Tahun Masuk</label>
                <input type="number" name="tahun_masuk" class="form-control" value="{{ $pendidikan->tahun_masuk }}"
                    required>
            </div>
            <div class="mb-3">
                <label>Tahun Keluar</label>
                <input type="number" name="tahun_keluar" class="form-control" value="{{ $pendidikan->tahun_keluar }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
