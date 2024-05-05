<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Welcome Page</h1>
        <h2 class="mb-4">Biodata Diri</h2>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/Poo.jpeg') }}" alt="image">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <p><strong>Nama:</strong> Azhim Diendro Setia Budi</p>
                <p><strong>NIM:</strong> 1204220013</p>
                <p><strong>Kelas:</strong> IS-05-01</p>
                <p><strong>Program Studi:</strong> Sistem Informasi</p>
            </div>
        </div>
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="{{ route('home') }}" class="nav-link active">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
