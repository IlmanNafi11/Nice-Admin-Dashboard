<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pengalaman Kerja</title>
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
    <div class="container py-4 min-vh-100 bg-white">
        <x-title-pages title="Pengalaman Kerja" />

        @if(session('success'))
            <div class="alert alert-success my-3">{{ session('success') }}</div>
        @endif

        <a href="{{ route('pengalaman-kerja.create') }}" class="btn btn-primary my-3">Tambah Pengalaman Kerja</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($pengalaman))
                    @foreach ($pengalaman as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->jabatan }}</td>
                            <td>{{ $data->tahun_masuk }}</td>
                            <td>{{ $data->tahun_keluar ?? '-' }}</td>
                            <td>
                                <a href="{{ route('pengalaman-kerja.edit', $data->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('pengalaman-kerja.destroy', $data->id) }}" method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
