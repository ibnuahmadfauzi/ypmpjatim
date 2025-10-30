<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('client.home.index') }}">
            <img src="/assets/images/logo/logo-ypmpjatim-text.png" alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
            <li class="nav-item">
                <a class="nav-link fw-semibold" href="{{ route('client.tentang-kami.index') }}">Tentang Kami</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link fw-semibold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bidang Kerja
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.konsultasi-pendidikan.index') }}">Konsultasi Pendidikan</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.penerbitan-buku.index') }}">Penerbitan Buku</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.penerbitan-jurnal.index') }}">Penerbitan Jurnal</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.diklat.index') }}">Diklat, Workshop, dan Seminar</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.pengerjaan-pmm.index') }}">Pengerjaan PMM Guru</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.pengerjaan-akreditasi-sekolah.index') }}">Pengerjaan Akreditasi Sekolah</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.bidang-kerja.pengerjaan-sertifikasi-guru.index') }}">Pengerjaan Sertifikasi Guru</a></li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-semibold" href="#">Artikel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-semibold" href="#">Berita</a>
            </li>
        </ul>
        <div>
            <a href="#" class="btn btn-primary btn-sm px-3">
                <i class="fa-solid fa-users"></i> Member Area
            </a>
        </div>
        </div>
    </div>
</nav>