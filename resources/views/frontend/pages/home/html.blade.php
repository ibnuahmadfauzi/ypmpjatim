<section class="homepage-hero container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-description">
                    <h1>{{ $data_pengaturan->judul }}</h1>
                    <h3>
                        "{{ $data_pengaturan->deskripsi }}"
                    </h3>
                    <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-handshake-angle"></i> Bidang
                        Kerja</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homepage-banner container-fluid">
    <div class="container">
        <img src={{ '/assets/images/' . $data_pengaturan->banner }}
            alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
    </div>
</section>

<section class="homepage-tentang container-fluid">
    <div class="container">
        <h2>~ Tentang Kami ~</h2>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <img src={{ '/assets/images/' . $data_pengaturan->logo_perusahaan }}
                        alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                </div>
            </div>
            <div class="col-lg-6">
                <p>
                    {{ $data_pengaturan->tentang_perusahaan }}
                </p>
                <div>
                    <a href="#" class="btn btn-sm btn-primary"><i
                            class="fa-solid fa-arrow-up-right-from-square"></i> Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="homepage-bidangkerja container-fluid">
    <div class="container">
        <h2>~ Bidang Kerja ~</h2>
        <div class="row justify-content-center">
            @forelse ($data_bidang_kerja as $item)
                <div class="col-lg-6">
                    <div class="bidang-kerja-box shadow">
                        <img src="/assets/images/bidang-kerja/{{ $item->gambar }}"
                            alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                        <div class="bidang-kerja-box-description">
                            <h4>{{ $item->judul }}</h4>
                            <p>
                                {{ $item->deskripsi }}
                            </p>
                            <div class="text-center">
                                <a href="{{ $item->link }}" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i> Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-6">
                    <h3 class="text-center py-5">
                        belum ada bidang kerja
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="homepage-artikel-berita container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5>Artikel Terbaru</h5>
                <div class="box-artikel-berita">
                    <!-- Artikel Terpopuler -->
                    <div class="artikel-populer">

                        @forelse ($artikel_terbaru as $artikel)
                            <a href="{{ url('/artikel/' . $artikel->slug) }}" class="artikel-populer-item">

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
            <div class="col-lg-6">
                <h5>Berita Terbaru</h5>
                <div class="box-artikel-berita">
                    <div class="d-flex justify-content-center py-4">
                        <img src="https://i.pinimg.com/originals/cf/6f/cf/cf6fcf14be2cd01dd4923b36445ca632.gif"
                            class="w-50" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
