<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('Barang.index') }}" class="nav-link active">Barang List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>


            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">

                    <a href="{{ route('Barang.create') }}" class="btn btn-primary">Add Product</a>

                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Satuan Barang</th>
                        <th>Kode Satuan</th>
                        <th>Nama Satuan</th>
                        <th>Deskripsi Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Kayu Tembaga</td>
                        <td>Rp. 10.000.000</td>
                        <td>Rp. 500.000</td>
                        <td>01</td>
                        <td>Lusin</td>
                        <td>Kayu ini akan dikirim ke pak madi di sumatra barat</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('Barang.show', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Show<i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('Barang.edit', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Edit<i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('Barang.destroy', ['Barang' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash">Delete</i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Besi Tembaga</td>
                        <td>Rp. 20.000.000</td>
                        <td>Rp. 1.000.000</td>
                        <td>02</td>
                        <td>Lusin</td>
                        <td>Kayu ini akan dikirim ke pak madi di sumatra barat</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('Barang.show', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Show<i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('Barang.edit', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Edit<i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('Barang.destroy', ['Barang' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash">Delete</i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Tembaga</td>
                        <td>Rp. 30.000.000</td>
                        <td>Rp. 2.000.000</td>
                        <td>03</td>
                        <td>Biji</td>
                        <td>Kayu ini akan dikirim ke pak madi di sumatra barat</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('Barang.show', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Show<i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('Barang.edit', ['Barang' => 2]) }}" class="btn btn-outline-dark btn-sm me-2">Edit<i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('Barang.destroy', ['Barang' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash">Delete</i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
