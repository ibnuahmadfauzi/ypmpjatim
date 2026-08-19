<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="{{ route('frontend.home.index') }}">
            <img src={{ '/assets/images/' . $data_pengaturan->logo_navbar }}
                alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
        </a>

        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarMain">

            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link home-link" href="{{ route('frontend.home.index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.tentang-kami.index') }}">Tentang Kami</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link bidang-kerja-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Bidang Kerja
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.konsultasi-pendidikan.index') }}">
                                Konsultasi Pendidikan
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('frontend.bidang-kerja.penerbitan-buku.index') }}">
                                Penerbitan Buku
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.penerbitan-jurnal.index') }}">
                                Penerbitan Jurnal
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.diklat-workshop-seminar.index') }}">
                                Diklat, Workshop, dan Seminar
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.pengerjaan-pmm-guru.index') }}">
                                Pengerjaan PMM Guru
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.pengerjaan-akreditasi-sekolah.index') }}">
                                Pengerjaan Akreditasi Sekolah
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('frontend.bidang-kerja.pengerjaan-sertifikasi-guru.index') }}">
                                Pengerjaan Sertifikasi Guru
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.artikel.index') }}">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li> --}}

            </ul>

            <!-- Tombol Login -->
            <div class="d-flex">
                <a href="/login" class="btn btn-primary px-4">
                    <i class="fa-solid fa-circle-user"></i> Masuk Akun
                </a>
            </div>

        </div>

    </div>
</nav>
