<?php
function excerpt($text, $limit = 150)
{
    $text = strip_tags($text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    if (strlen($text) <= $limit) {
        return $text;
    }
    return substr($text, 0, $limit) . '...';
}
?>

<section class="daftar-artikel container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="text-center mb-5">Menampilkan : {{ $judul_daftar }}</h3>
                        <div class="row">
                            @forelse ($data_berita as $item)
                                <div class="col-lg-6">
                                    <div class="card mb-3">
                                        <div class="card-body p-0">
                                            <div class="box-thumbnail-artikel">
                                                <img src="/assets/images/berita/{{ $item->thumbnail }}" class="w-100"
                                                    alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                                            </div>
                                            <div class="p-3">
                                                <h5>{{ $item->judul }}</h5>
                                                <p>
                                                    <small>
                                                        {{ excerpt($item->konten) }}
                                                    </small>
                                                </p>
                                                <p>
                                                    <a class="btn btn-primary btn-sm"
                                                        href={{ '/berita/' . $item->slug }}>baca selengkapnya</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="py-5 my-5 text-center">
                                    <p>
                                        Belum ada berita yang ditampilkan
                                    </p>
                                </div>
                            @endforelse
                        </div>
                        {{ $data_berita->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="card-body">
                        <!-- Sidebar -->
                        <aside class="sidebar-artikel">

                            <!-- Pencarian Berita -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body p-4">

                                    <h5 class="fw-semibold mb-3">
                                        <i class="fa-solid fa-magnifying-glass me-2"></i>
                                        Cari Berita
                                    </h5>

                                    <form class="form-cari">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Cari berita..." id="keyword-cari-berita">

                                            <button class="btn btn-primary btn-cari-berita">
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
                                        Berita Terpopuler
                                    </h5>

                                    <div class="artikel-populer">

                                        @forelse ($berita_populer as $berita)
                                            <a href="{{ url('/berita/' . $berita->slug) }}"
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
