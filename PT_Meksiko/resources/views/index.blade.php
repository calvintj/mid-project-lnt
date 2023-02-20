<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Karyawan - PT Meksiko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-5">
                    <h2>Data Karyawan PT Meksiko</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary mb-4 mt-2" href="{{ route('karyawans.create') }}"> Tambah Data Karyawan</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th width="280px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawans as $k)
                    <tr class="text-center">
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->umur }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>{{ $k->telp }}</td>
                        <td>
                            <form action="{{ route('karyawans.destroy', $k->id) }}" method="Post">
                                <a class="btn btn-warning" href="{{ route('karyawans.edit', $k->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $karyawans->links() !!}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
