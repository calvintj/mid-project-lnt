<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Karyawan - PT Meksiko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg margin-tb">
                <div class="pull-left mb-4 mt-5">
                    <h2>Tambah Karyawan PT Meksiko</h2>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form class="col-lg" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="inputNama" class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan"
                                id="inputNama">
                        </div>
                        @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 row">
                        <label for="inputUmur" class="col-sm-2 col-form-label"><strong>Umur</strong></label>
                        <div class="col-sm-10">
                            <input type="number" name="umur" class="form-control" placeholder="Umur Karyawan"
                                id="inputUmur">
                        </div>
                        @error('umur')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 row">
                        <label for="inputAlamat" class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                        <div class="col-sm-10">
                            <textarea type="text" name="alamat" class="form-control" placeholder="Alamat Karyawan"
                                id="inputAlamat"></textarea>
                        </div>
                        @error('alamat')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="inputTelp" class="col-sm-2 col-form-label"><strong>No Telepon</strong></label>
                        <div class="col-sm-10">
                            <input type="text" name="telp" class="form-control" placeholder="No Telepon Karyawan"
                                id="inputTelp">
                        </div>
                        @error('telp')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <a class="btn btn-danger me-4 px-5" href="{{ route('index') }}">Batal</a>
                        <button type="submit" class="btn btn-primary ml-3 px-5">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
