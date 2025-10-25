<div class="container-fluid footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center text-light fw-bold">YPMP JATIM</h2>
                <div class="box-kontak text-light">
                    <p>
                        <span class="fw-bold">Alamat:</span>
                        <br>
                        <span class="footer-alamat"></span>
                    </p>
                    <p>
                        <span class="fw-bold">No. Telp:</span>
                        <br>
                        <span class="footer-telepon"></span>
                    </p>
                    <p>
                        <span class="fw-bold">Email:</span>
                        <br>
                        <span class="footer-email"></span>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center text-light fw-bold">KIRIM PESAN</h2>
                <form class="form-pesan-ypmpjatim@gmail.comfooter mb-5" id="footer-pesan-form">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <label for="input-pesan-nama" class="form-label fw-bold text-light">Nama:</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap ..." id="input-pesan-nama" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <label for="input-pesan-email" class="form-label fw-bold text-light">Email:</label>
                                    <input type="email" class="form-control" placeholder="Email ..." id="input-pesan-email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="input-pesan-subjek" class="form-label fw-bold text-light">Subjek:</label>
                        <input type="text" class="form-control" placeholder="subjek Pesan ..." id="input-pesan-subjek" required>
                    </div>
                    <div class="mb-3">
                        <label for="input-pesan-pesan" class="form-label fw-bold text-light">Pesan:</label>
                        <textarea id="input-pesan-pesan" class="form-control" rows="3" placeholder="Pesan ..."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-light"><i class="fa-solid fa-paper-plane me-1"></i> Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid copyright-section">
    <p class="text-center fw-bold">
        Copyright &copy; {{ date("Y") }} Yayasan Pengembangan Mutu Pendidikan. All Right Reserved.
    </p>
</div>