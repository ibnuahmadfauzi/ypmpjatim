<aside id="sidebar">

    <div class="logo">
        <h4>YPMP</h4>
        <small>Admin Panel</small>
    </div>

    <ul class="menu">

        <li class="admin-dashboard-menu">
            <a href="{{ route('admin.dashboard.index') }}">
                <i class="fa-solid fa-gauge"></i>
                Dashboard
            </a>
        </li>

        <li class="admin-artikel-menu">
            <a href="{{ route('admin.artikel.index') }}">
                <i class="fa-solid fa-blog"></i>
                Artikel
            </a>
        </li>

        <li class="admin-berita-menu">
            <a href="{{ route('admin.berita.index') }}">
                <i class="fa-solid fa-newspaper"></i>
                Berita
            </a>
        </li>

        <li class="admin-buku-menu">
            <a href="{{ route('admin.buku.index') }}">
                <i class="fa-solid fa-book"></i>
                Buku
            </a>
        </li>

        <li class="admin-penerbitanbuku-menu">
            <a href="{{ route('admin.penerbitan-buku.index') }}">
                <i class="fa-solid fa-certificate"></i>
                Pengajuan Penerbitan
            </a>
        </li>

        <li class="admin-bidangkerja-menu">
            <a href="{{ route('admin.bidang-kerja.index') }}">
                <i class="fa-solid fa-briefcase"></i>
                Bidang Kerja
            </a>
        </li>

        <li class="admin-pesan-menu">
            <a href="{{ route('admin.pesan.index') }}">
                <i class="fa-solid fa-message"></i>
                Pesan
            </a>
        </li>

        <li class="admin-member-menu">
            <a href="{{ route('admin.member.index') }}">
                <i class="fa-solid fa-people-group"></i>
                Member
            </a>
        </li>

        <li class="admin-pengaturan-menu">
            <a href="{{ route('admin.pengaturan.index') }}">
                <i class="fa-solid fa-gear"></i>
                Pengaturan
            </a>
        </li>

        <hr>

        <li>
            <form action="/logout" method="POST" class="text-center">
                @csrf
                <button class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
            </form>
        </li>

    </ul>

</aside>
