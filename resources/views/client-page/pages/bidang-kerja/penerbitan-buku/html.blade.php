<div class="container-fluid bidang-kerja-page">
    <div class="container">
        <div class="my-5">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="bg-primary text-center text-light py-2 rounded-2"><i class="fa-solid fa-burger"></i> Menu Bidang</h6>
                            <div class="list-group mb-5">
                                <a href="#" id="menu-formpenerbitanbuku" class="list-group-item list-group-item-action">
                                    Form Penerbitan Buku
                                </a>
                                <a href="#" id="menu-produk" class="list-group-item list-group-item-action">
                                    Produk
                                </a>
                                <a href="#" id="menu-royalti" class="list-group-item list-group-item-action">
                                    Royalti
                                </a>
                                <a href="#" id="menu-selfpublishing" class="list-group-item list-group-item-action">
                                    Self Publishing
                                </a>
                                <a href="#" id="menu-joinmodal" class="list-group-item list-group-item-action">
                                    Join Modal
                                </a>
                                <a href="#" id="menu-paketpenerbitandosen" class="list-group-item list-group-item-action">
                                    Paket Penerbitan Dosen
                                </a>
                                <a href="#" id="menu-paketpenerbitanguru" class="list-group-item list-group-item-action">
                                    Paket Penerbitan Guru
                                </a>
                                <a href="#" id="menu-paketpenerbitanpelajar" class="list-group-item list-group-item-action">
                                    Paket Penerbitan Pelajar
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="bidangkerja-penerbitanguru-container">
                                <div id="canvas-formpenerbitanbuku">
                                    <h3><i class="fa-solid fa-crown"></i> Form Penerbitan Buku</h3>
                                    <div class="content mt-5">
                                        <form id="pengajuanbuku-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6 class="bg-primary text-center text-light rounded-2 py-1 fw-normal">Informasi Penulis</h6>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-namalengkap" class="form-label">Nama Lengkap :</label>
                                                        <input type="text" class="form-control" id="input-penerbitanbuku-namalengkap" placeholder="cth: Budi Santoso">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-alamat" class="form-label">Alamat :</label>
                                                        <textarea id="input-penerbitanbuku-alamat" class="form-control" rows="5" placeholder="cth: Jl. Maluku, RT 003, RW 004, Jatisari, Jatinom, Kanigoro, Blitar"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-jeniskelamin" class="form-label">Jenis Kelamin :</label>
                                                        <select id="input-penerbitanbuku-jeniskelamin" class="form-select">
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-nohp" class="form-label">No. HP :</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="input-penerbitanbuku-nohp-grub">+62</span>
                                                            <input type="number" id="input-penerbitanbuku-nohp" class="form-control" placeholder="85755550745" aria-label="85755550745" aria-describedby="input-penerbitanbuku-nohp-grub">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-email" class="form-label">Email :</label>
                                                        <input type="email" id="input-penerbitanbuku-email" placeholder="cth: ypmpjatim@gmail.com" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h6 class="bg-primary text-center text-light rounded-2 py-1 fw-normal">Informasi Buku</h6>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-paket" class="form-label">Paket Paket :</label>
                                                        <select id="input-penerbitanbuku-paket" class="form-select">
                                                            <option value="">Pilih Paket</option>
                                                            <option value="paket-penerbitan-dosen"asasa>Paket Penerbitan Dosen</option>
                                                            <option value="paket-penerbitan-guru">Paket Penerbitan Guru</option>
                                                            <option value="paket-penerbitan-pelajar">Paket Penerbitan Pelajar</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-jenisbuku" class="form-label">Jenis Buku :</label>
                                                        <select id="input-penerbitanbuku-jenisbuku" class="form-select">
                                                            <option value="">Pilih Jenis Buku</option>
                                                            <option value="fiksi">Fiksi</option>
                                                            <option value="non-fiksi">Non Fiksi</option>
                                                            <option value="ilmiah">Ilmiah</option>
                                                            <option value="pendidikan">Pendidikan</option>
                                                            <option value="referensi">Referensi</option>
                                                            <option value="agama">Agama</option>
                                                            <option value="anak">Anak</option>
                                                            <option value="hobi">Hobi</option>
                                                            <option value="lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-sinopsis" class="form-label">Sinopsis :</label>
                                                        <textarea id="input-penerbitanbuku-sinopsis" class="form-control" rows="10" placeholder="..."></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input-penerbitanbuku-manuskrip" class="form-label">Upload Manuskrip :</label>
                                                        <input type="file" id="input-penerbitanbuku-manuskrip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="reset" class="btn btn-secondary px-4"><i class="fa-solid fa-rotate-right"></i></button>
                                                <button type="submit" class="btn btn-primary px-4"><i class="fa-solid fa-cloud-arrow-up"></i> Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="canvas-produk">
                                    <h3><i class="fa-solid fa-crown"></i> Produk</h3>
                                    <div class="content">
                                        <p class="text-center py-5">
                                            belum ada informasi yang ditampilkan
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-royalti">
                                    <h3><i class="fa-solid fa-crown"></i> Royalti</h3>
                                    <div class="content mt-5">
                                        <p class="text-justify">
                                            YPMP JATIM akan menerbitkan naskah dari penulis, setelah naskah tersebut lolos seleksi dari tim redaksional YPMP JATIM. Setelah nasakah diterbitkan penulis berhak mendapatkan royalti atas buku yang terjual sesuai dengan standar yaitu sebesar 10% (Sepuluh Persen). Penulis akan mendapatkan laporan data buku terjual dan pembayaran royalti dilakukan secara periodik setiap 6 bulan sekali.
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-selfpublishing">
                                    <h3><i class="fa-solid fa-crown"></i> Self Publishing</h3>
                                    <div class="content mt-5">
                                        <p class="text-justify">
                                            YPMP JATIM menyediakan jasa pengelolaan proses penerbitan meliputi produksi-distribusi-pencatatan, dan laporan keuangan. Kerjasama ini diwujudkan dalam Perjanjian Kerjasama Penerbitan. Semua kegiatan produksi dan bisnis akan ditangani sepenuhnya oleh YPMP JATIM dan pembiayaan dilakukan oleh Partner/Penulis, keuntungan dari proses penjualan buku ini seluruhnya menjadi milik Partner/Penulis.
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-joinmodal">
                                    <h3><i class="fa-solid fa-crown"></i> Join Modal</h3>
                                    <div class="content">
                                        <p class="text-justify">
                                            Kerjasama ini akan diwujudkan dalam bentuk penanaman modal bersama dengan komposisi Partner 50% dan YPMP JATIM 50% atau disepakati lain oleh kedua belah pihak. Brand yang digunakan adalah Brand penerbit yang telah di sepakati bersama. Laba atas hasil usaha akan masuk dalam pembagian laba, yang akan dihitung berdasarkan kesepakatan pembagian deviden secara periodik.
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-paketpenerbitandosen">
                                    <h3><i class="fa-solid fa-crown"></i> Paket Penerbitan Dosen</h3>
                                    <div class="content">
                                        <p class="text-center py-5">
                                            belum ada informasi yang ditampilkan
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-paketpenerbitanguru">
                                    <h3><i class="fa-solid fa-crown"></i> Paket Penerbitan Guru</h3>
                                    <div class="content">
                                        <p class="text-center py-5">
                                            belum ada informasi yang ditampilkan
                                        </p>
                                    </div>
                                </div>
                                <div id="canvas-paketpenerbitanpelajar">
                                    <h3><i class="fa-solid fa-crown"></i> Paket Penerbitan Pelajar</h3>
                                    <div class="content">
                                        <p class="text-center py-5">
                                            belum ada informasi yang ditampilkan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>