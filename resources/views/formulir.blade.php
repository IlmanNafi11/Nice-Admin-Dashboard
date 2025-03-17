<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Request dengan input laravel</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Form Validation dengan laravel</h1>
            <form action="/formulir/proses" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" {{$errors->has('nama') ? 'is-invalid' : ''}} placeholder="Nama lengkap" value="{{old('nama')}}">
                    @if ($errors->has('nama'))
                        <span class="text-danger small">
                            <p>{{$errors->first('nama')}}</p>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamat" class="control-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" {{$errors->has('alamat') ? 'is-invalid' : ''}}
                        placeholder="Alamat" value="{{old('alamat')}}">
                    @if ($errors->has('alamat'))
                        <span class="text-danger small">
                            <p>{{$errors->first('alamat')}}</p>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
