{{-- resources/views/errors/404.blade.php --}}
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>404 — Halaman Tidak Ditemukan</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- Contoh menggunakan Bootstrap CDN, ganti sesuai project -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fafc; }
        .hero { min-height: 60vh; display:flex; align-items:center; justify-content:center; }
        .card { max-width:720px; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="hero">
        <div class="card shadow-sm p-4 text-center">
            <h1 class="display-4 fw-bold">404</h1>
            <p class="lead mb-3">Maaf, halaman yang Anda cari tidak ditemukan.</p>
            <p class="text-muted mb-4">Mungkin link yang Anda buka sudah tidak aktif atau alamat URL salah ketik.</p>

            <div class="d-flex justify-content-center gap-2">
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Kembali</a>
            </div>

            <hr class="my-4">

            <p class="small text-muted mb-0">Jika masalah berlanjut, silakan hubungi admin (ypmpjatim@gmail.com).</p>
        </div>
    </div>
</div>
</body>
</html>
