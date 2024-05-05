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
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link">Barang
                            List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode Barang</label>
                            <input class="form-control {{ $errors->has('kodebarang') ? 'is-invalid' : '' }}" type="text" name="kodebarang" id="kodebarang" value="{{ old('kodebarang', $barang->kodebarang) }}" placeholder="Enter Kode Barang">
                            <div class="invalid-feedback">{{ $errors->first('kodebarang') }}</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input class="form-control {{ $errors->has('namabarang') ? 'is-invalid' : '' }}" type="text" name="namabarang" id="namabarang" value="{{ old('namabarang', $barang->namabarang) }}"
                                placeholder="Nama Barang">
                            <div class="invalid-feedback">{{ $errors->first('namabarang') }}</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="form-label">Harga Barang</label>
                            <input class="form-control {{ $errors->has('hargabarang') ? 'is-invalid' : '' }}" type="text" name="hargabarang" id="hargabarang" value="{{ old('hargabarang', $barang->hargabarang) }}"
                                placeholder="Enter Harga barang">
                            <div class="invalid-feedback">{{ $errors->first('hargabarang') }}</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="satuanbarang" class="form-label">Satuan Barang</label>
                            <input class="form-control {{ $errors->has('satuanbarang') ? 'is-invalid' : '' }}" type="text" name="satuanbarang" id="satuanbarang" value="{{ old('satuanbarang', $barang->satuanbarang) }}"
                                placeholder="Enter Deskripsi barang">
                            <div class="invalid-feedback">{{ $errors->first('satuanbarang') }}</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="kodesatuan" class="form-label">Kode Satuan</label>
                            <input class="form-control {{ $errors->has('kodesatuan') ? 'is-invalid' : '' }}" type="text" name="kodesatuan" id="kodesatuan" value="{{ old('kodesatuan', $barang->kodesatuan) }}"
                                placeholder="Enter Harga barang">
                            <div class="invalid-feedback">{{ $errors->first('kodesatuan') }}</div>
                        </div>
                        <div class="col-md-6 mb-3"> <label for="namasatuan" class="form-label">Nama Satuan</label> <select
                                class="form-select form-select-sm " aria-label=".form-select-sm example" name="namasatuan"
                                id="namasatuan">
                                <option value="" selected>Pilih</option>
                                <option value="unit" {{ $barang->namasatuan == 'unit' ? 'selected' : '' }}>Biji</option>
                                <option value="buah" {{ $barang->namasatuan == 'buah' ? 'selected' : '' }}>Lusin</option>
                            </select> </div>

                        <div class="form-floating">
                            <textarea class="form-control {{ $errors->has('deskripsibarang') ? 'is-invalid' : '' }}" placeholder="Enter Deskripsi Barang" id="floatingTextarea2" style="height: 100px" name="deskripsibarang">{{ old('deskripsibarang', $barang->deskripsibarang) }}</textarea>
                            <label for="floatingTextarea2">Deskripsi Barang</label>
                            <div class="invalid-feedback">{{ $errors->first('deskripsibarang') }}</div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2">
