<section id="bidang-kerja-penerbitan-buku" class="container-fluid">
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="bg-primary text-light text-center m-0 py-2 fw-normal rounded-2">
                            <i class="fa-solid fa-bars"></i> Menu Bidang
                        </h5>

                        <div class="list-group my-3">

                            <a href="#" class="list-group-item list-group-item-action"
                                id="menu-form-penerbitan-buku">
                                Form Penerbitan Buku
                            </a>

                            <a href="#" class="list-group-item list-group-item-action" id="menu-produk">
                                Produk
                            </a>

                            <a href="#" class="list-group-item list-group-item-action" id="menu-royalti">
                                Royalti
                            </a>

                            <a href="#" class="list-group-item list-group-item-action" id="menu-self-publishing">
                                Self Publishing
                            </a>

                            <a href="#" class="list-group-item list-group-item-action" id="menu-join-modal">
                                Join Modal
                            </a>

                            <a href="#" class="list-group-item list-group-item-action"
                                id="menu-paket-penerbitan-dosen">
                                Paket Penerbitan Dosen
                            </a>

                            <a href="#" class="list-group-item list-group-item-action"
                                id="menu-paket-penerbitan-guru">
                                Paket Penerbitan Guru
                            </a>

                            <a href="#" class="list-group-item list-group-item-action"
                                id="menu-paket-penerbitan-pelajar">
                                Paket Penerbitan Pelajar
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card border-0">
                    <div class="card-body">

                        <div id="konten-form-penerbitan-buku">
                            <h4>Form Penerbitan Buku</h4>
                            <hr>
                            @if ($is_member == false)
                                <div class="alert alert-danger" role="alert">
                                    Silahkan <strong><a href="/login" target="_blank">masuk akun</a></strong> terlebih
                                    dahulu untuk
                                    mengisi
                                    pengajuan penerbitan buku
                                </div>
                            @endif
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="row">

                                    <!-- ========================= -->
                                    <!-- INFORMASI PENULIS -->
                                    <!-- ========================= -->
                                    <div class="col-lg-6">

                                        <div class="text-center text-white rounded-2 py-1 mb-2 bg-primary">
                                            Informasi Penulis
                                        </div>

                                        <!-- Nama Lengkap -->
                                        <div class="mb-3">
                                            <label for="nama_lengkap" class="form-label">
                                                Nama Lengkap :
                                            </label>

                                            <input type="text" class="form-control" id="nama_lengkap"
                                                name="nama_lengkap" placeholder="cth: Budi Santoso"
                                                {{ $is_member == false ? 'disabled' : '' }}>
                                        </div>


                                        <!-- Alamat -->
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">
                                                Alamat :
                                            </label>

                                            <textarea class="form-control" id="alamat" name="alamat" rows="5"
                                                placeholder="cth: Jl. Maluku, RT 003, RW 004, Jatisari, Jatinom, Kanigoro, Blitar"
                                                {{ $is_member == false ? 'disabled' : '' }}></textarea>
                                        </div>


                                        <!-- Jenis Kelamin -->
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">
                                                Jenis Kelamin :
                                            </label>

                                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                                {{ $is_member == false ? 'disabled' : '' }}>

                                                <option value="" selected disabled>
                                                    Pilih Jenis Kelamin
                                                </option>

                                                <option value="Laki-laki">
                                                    Laki-laki
                                                </option>

                                                <option value="Perempuan">
                                                    Perempuan
                                                </option>

                                            </select>
                                        </div>


                                        <!-- No HP -->
                                        <div class="mb-3">
                                            <label for="no_hp" class="form-label">
                                                No. HP :
                                            </label>

                                            <div class="input-group">

                                                <span class="input-group-text">
                                                    +62
                                                </span>

                                                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                                    placeholder="85755550745"
                                                    {{ $is_member == false ? 'disabled' : '' }}>

                                            </div>
                                        </div>


                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">
                                                Email :
                                            </label>

                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="cth: ypmpjatim@gmail.com"
                                                {{ $is_member == false ? 'disabled' : '' }}>

                                        </div>

                                    </div>


                                    <!-- ========================= -->
                                    <!-- INFORMASI BUKU -->
                                    <!-- ========================= -->
                                    <div class="col-lg-6">

                                        <div class="text-center text-white rounded-2 py-1 mb-2 bg-primary">
                                            Informasi Buku
                                        </div>


                                        <!-- Paket -->
                                        <div class="mb-3">
                                            <label for="paket" class="form-label">
                                                Paket Paket :
                                            </label>

                                            <select class="form-select" id="paket" name="paket"
                                                {{ $is_member == false ? 'disabled' : '' }}>

                                                <option value="" selected disabled>
                                                    Pilih Paket
                                                </option>

                                                <option value="Paket 1">
                                                    Paket Penerbitan Dosen
                                                </option>

                                                <option value="Paket 2">
                                                    Paket Penerbitan Guru
                                                </option>

                                                <option value="Paket 3">
                                                    Paket Penerbitan Pelajar
                                                </option>

                                            </select>
                                        </div>


                                        <!-- Jenis Buku -->
                                        <div class="mb-3">
                                            <label for="jenis_buku" class="form-label">
                                                Jenis Buku :
                                            </label>

                                            <select class="form-select" id="jenis_buku" name="jenis_buku"
                                                {{ $is_member == false ? 'disabled' : '' }}>

                                                <option value="" selected disabled>
                                                    Pilih Jenis Buku
                                                </option>

                                                <option value="Buku Ajar">
                                                    Buku Ajar
                                                </option>

                                                <option value="Buku Referensi">
                                                    Buku Referensi
                                                </option>

                                                <option value="Modul">
                                                    Modul
                                                </option>

                                                <option value="Monograf">
                                                    Monograf
                                                </option>

                                            </select>
                                        </div>


                                        <!-- Sinopsis -->
                                        <div class="mb-3">
                                            <label for="sinopsis" class="form-label">
                                                Sinopsis :
                                            </label>

                                            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="10" placeholder="..."
                                                {{ $is_member == false ? 'disabled' : '' }}></textarea>
                                        </div>


                                        <!-- Upload Manuskrip -->
                                        <div class="mb-3">
                                            <label for="manuskrip" class="form-label">
                                                Upload Manuskrip :
                                            </label>

                                            <input type="file" class="form-control" id="manuskrip"
                                                name="manuskrip" accept=".pdf,.doc,.docx"
                                                {{ $is_member == false ? 'disabled' : '' }}>
                                        </div>

                                    </div>


                                    <!-- ========================= -->
                                    <!-- TOMBOL -->
                                    <!-- ========================= -->
                                    <div class="col-12 mt-2">

                                        <button type="reset" class="btn btn-secondary px-4"
                                            {{ $is_member == false ? 'disabled' : '' }}>
                                            <i class="fa-solid fa-rotate-right"></i>
                                        </button>

                                        <button type="submit" class="btn text-white px-4"
                                            style="background-color: #978c77;"
                                            {{ $is_member == false ? 'disabled' : '' }}>
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            Kirim
                                        </button>

                                    </div>

                                </div>

                            </form>
                        </div>

                        <div id="konten-produk">
                            <h4>Produk</h4>
                            <hr>
                            <p class="m-0 py-5 text-center">
                                belum ada informasi yang ditampilkan
                            </p>
                        </div>

                        <div id="konten-royalti">
                            <h4>Royalti</h4>
                            <hr>
                            <p style="text-align: justify;">
                                YPMP JATIM akan menerbitkan naskah dari penulis, setelah naskah tersebut lolos seleksi
                                dari tim redaksional YPMP JATIM. Setelah nasakah diterbitkan penulis berhak mendapatkan
                                royalti atas buku yang terjual sesuai dengan standar yaitu sebesar 10% (Sepuluh Persen).
                                Penulis akan mendapatkan laporan data buku terjual dan pembayaran royalti dilakukan
                                secara periodik setiap 6 bulan sekali.
                            </p>
                        </div>

                        <div id="konten-self-publishing">
                            <h4>Self Publishing</h4>
                            <hr>
                            <p style="text-align: justify;">
                                YPMP JATIM menyediakan jasa pengelolaan proses penerbitan meliputi
                                produksi-distribusi-pencatatan, dan laporan keuangan. Kerjasama ini diwujudkan dalam
                                Perjanjian Kerjasama Penerbitan. Semua kegiatan produksi dan bisnis akan ditangani
                                sepenuhnya oleh YPMP JATIM dan pembiayaan dilakukan oleh Partner/Penulis, keuntungan
                                dari proses penjualan buku ini seluruhnya menjadi milik Partner/Penulis.
                            </p>
                        </div>

                        <div id="konten-join-modal">
                            <h4>Join Modal</h4>
                            <hr>
                            <p style="text-align: justify;">
                                Kerjasama ini akan diwujudkan dalam bentuk penanaman modal bersama dengan komposisi
                                Partner 50% dan YPMP JATIM 50% atau disepakati lain oleh kedua belah pihak. Brand yang
                                digunakan adalah Brand penerbit yang telah di sepakati bersama. Laba atas hasil usaha
                                akan masuk dalam pembagian laba, yang akan dihitung berdasarkan kesepakatan pembagian
                                deviden secara periodik.
                            </p>
                        </div>

                        <div id="konten-paket-penerbitan-dosen">
                            <h4>Paket Penerbitan Dosen</h4>
                            <hr>
                            <p class="m-0 py-5 text-center">
                                belum ada informasi yang ditampilkan
                            </p>
                        </div>

                        <div id="konten-paket-penerbitan-guru">
                            <h4>Paket Penerbitan Guru</h4>
                            <hr>
                            <p class="m-0 py-5 text-center">
                                belum ada informasi yang ditampilkan
                            </p>
                        </div>

                        <div id="konten-paket-penerbitan-pelajar">
                            <h4>Paket Penerbitan Pelajar</h4>
                            <hr>
                            <p class="m-0 py-5 text-center">
                                belum ada informasi yang ditampilkan
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
