<?php
function tampilkanKategori($kategori)
{
    $kategori = explode(',', $kategori);
    foreach ($kategori as $item) {
        $item = trim($item);
        echo '<span class="badge bg-primary me-1">' . $item . '</span>';
    }
}

function tanggalIndonesia($tanggal)
{
    $bulan = [1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'];
    $tanggal = strtotime($tanggal);
    $hari = date('d', $tanggal);
    $bulanAngka = date('n', $tanggal);
    $tahun = date('Y', $tanggal);
    return $hari . ' ' . $bulan[$bulanAngka] . ' ' . $tahun;
}
?>

<section class="daftar-artikel container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p>
                    {!! tampilkanKategori($data_artikel->kategori) !!}
                </p>
                <p>
                    <a href="/">Home</a> > <a href="/artikel">Artikel</a>
                </p>
                <h2 class="fw-semibold">{{ $data_artikel->judul }}</h2>
                <p>
                    <small>{{ tanggalIndonesia($data_artikel->updated_at) }}</small>
                </p>
                <div class="my-4">
                    <img src={{ '/uploads/artikel/' . $data_artikel->thumbnail }}
                        alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                </div>
                <div>
                    {!! $data_artikel->konten !!}
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
