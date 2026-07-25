<header class="topbar">

    <button id="menu-toggle" class="btn btn-light d-lg-none">
        <i class="bi bi-list"></i>
    </button>

    <div class="title">
        Dashboard
    </div>

    <div class="profile">

        <img
            src="https://static.vecteezy.com/system/resources/previews/038/568/316/non_2x/cat-icon-art-icons-and-graphics-vector.jpg">

        <div>
            <strong>{{ $user->name }}</strong><br>
            <small>{{ $user->role }}</small>
        </div>

    </div>

</header>
