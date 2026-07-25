<aside id="sidebar">

    <div class="logo">
        <h4>YPMP</h4>
        <small>Admin Panel</small>
    </div>

    <ul class="menu">

        <li class="admin-dashboard-menu">
            <a href="#">
                <i class="fa-solid fa-gauge"></i>
                Dashboard
            </a>
        </li>

        <li class="admin-artikel-menu">
            <a href="#">
                <i class="fa-solid fa-blog"></i>
                Artikel
            </a>
        </li>

        <li class="admin-bidangkerja-menu">
            <a href="{{ route('admin.bidang-kerja.index') }}">
                <i class="fa-solid fa-briefcase"></i>
                Bidang Kerja
            </a>
        </li>

        <li class="admin-pesan-menu">
            <a href="#">
                <i class="fa-solid fa-message"></i>
                Pesan
            </a>
        </li>

        <li>
            <a href="#">
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
