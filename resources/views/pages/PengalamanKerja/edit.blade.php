<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pengalaman Kerja | Create</title>
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
        <h2>Edit Pengalaman Kerja</h2>

        <form action="{{ route('pengalaman-kerja.update', $pengalaman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control" value="{{ $pengalaman->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $pengalaman->jabatan }}" required>
            </div>
            <div class="mb-3">
                <label>Tahun Masuk</label>
                <input type="number" name="tahun_masuk" class="form-control" value="{{ $pengalaman->tahun_masuk }}"
                    required>
            </div>
            <div class="mb-3">
                <label>Tahun Selesai</label>
                <input type="number" name="tahun_keluar" class="form-control" value="{{ $pengalaman->tahun_keluar }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('pengalaman-kerja.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
