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
                <div class="card border-0">
                    <div class="card-body">
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
                            <img src={{ '/assets/images/artikel/' . $data_artikel->thumbnail }}
                                alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" class="w-100">
                        </div>
                        <div>
                            {!! $data_artikel->konten !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="card-body">
                        <!-- Sidebar -->
                        <aside class="sidebar-artikel">

                            <!-- Pencarian Artikel -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">

                                    <h5 class="fw-semibold mb-3">
                                        <i class="fa-solid fa-magnifying-glass me-2"></i>
                                        Cari Artikel
                                    </h5>

                                    <form class="form-cari">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Cari artikel..." id="keyword-cari-artikel">

                                            <button class="btn btn-primary btn-cari-artikel">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>


                            <!-- Artikel Terpopuler -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">

                                    <h5 class="fw-semibold mb-3">
                                        <i class="fa-solid fa-fire me-2"></i>
                                        Artikel Terpopuler
                                    </h5>

                                    <div class="artikel-populer">

                                        @forelse ($artikel_populer as $artikel)
                                            <a href="{{ url('/artikel/' . $artikel->slug) }}"
                                                class="artikel-populer-item">

                                                <!-- Thumbnail -->
                                                <img src="{{ asset('assets/images/artikel/' . $artikel->thumbnail) }}"
                                                    alt="{{ $artikel->judul }}">

                                                <!-- Informasi Artikel -->
                                                <div class="artikel-populer-info">

                                                    <h6>
                                                        {{ $artikel->judul }}
                                                    </h6>

                                                    <small>
                                                        <i class="fa-regular fa-eye me-1"></i>
                                                        {{ number_format($artikel->dilihat, 0, ',', '.') }} kali
                                                        dilihat
                                                    </small>

                                                </div>

                                            </a>

                                        @empty

                                            <p class="text-muted text-center mb-0">
                                                Belum ada artikel populer.
                                            </p>
                                        @endforelse

                                    </div>

                                </div>
                            </div>

                            <!-- Berita Terpopuler -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">

                                    <h5 class="fw-semibold mb-3">
                                        <i class="fa-solid fa-fire me-2"></i>
                                        Berita Terpopuler
                                    </h5>

                                    <div class="artikel-populer">

                                        @forelse ($berita_populer as $berita)
                                            <a href="{{ url('/artikel/' . $berita->slug) }}"
                                                class="artikel-populer-item">

                                                <!-- Thumbnail -->
                                                <img src="{{ asset('assets/images/berita/' . $berita->thumbnail) }}"
                                                    alt="{{ $berita->judul }}">

                                                <!-- Informasi Artikel -->
                                                <div class="artikel-populer-info">

                                                    <h6>
                                                        {{ $berita->judul }}
                                                    </h6>

                                                    <small>
                                                        <i class="fa-regular fa-eye me-1"></i>
                                                        {{ number_format($berita->dilihat, 0, ',', '.') }} kali
                                                        dilihat
                                                    </small>

                                                </div>

                                            </a>

                                        @empty

                                            <p class="text-muted text-center mb-0">
                                                Belum ada berita populer.
                                            </p>
                                        @endforelse

                                    </div>

                                </div>
                            </div>


                            <!-- Papan Iklan -->
                            {{-- <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">

                                    <h5 class="fw-semibold mb-3">
                                        <i class="fa-solid fa-bullhorn me-2"></i>
                                        Papan Iklan
                                    </h5>

                                    <div class="papan-iklan">

                                        <img src="{{ asset('assets/images/iklan.jpg') }}" alt="Papan Iklan">

                                    </div>

                                </div>
                            </div> --}}

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
