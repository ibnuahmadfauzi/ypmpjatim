<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Pengaturan</h4>
        </div>
        <hr>
        <form action="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="pengaturan-judul" class="form-label text-secondary">Judul Website :</label>
                        <input type="text" id="pengaturan-judul" class="form-control"
                            value={{ $data_pengaturan->judul }}>
                    </div>
                    <div class="mb-4">
                        <label for="pengaturan-deskripsi" class="form-label text-secondary">Deskripsi Website :</label>
                        <textarea id="pengaturan-deskripsi" class="form-control" rows="4">{{ $data_pengaturan->deskripsi }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="pengaturan-tentang" class="form-label text-secondary">Tentang Perusahaan :</label>
                        <textarea id="pengaturan-tentang" class="form-control" rows="10">{{ $data_pengaturan->tentang_perusahaan }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="pengaturan-alamat" class="form-label text-secondary">Alamat Perusahaan :</label>
                        <textarea id="pengaturan-alamat" class="form-control" rows="4">{{ $data_pengaturan->alamat }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="pengaturan-notelp" class="form-label text-secondary">No. Telp Perusahaan :</label>
                        <textarea id="pengaturan-notelp" class="form-control" rows="4">{{ $data_pengaturan->notelp }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="pengaturan-email" class="form-label text-secondary">Email Perusahaan :</label>
                        <input type="text" id="pengaturan-email" class="form-control"
                            value={{ $data_pengaturan->email }}>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-5">
                        <div class="mb-4">
                            <label for="pengaturan-logonavbar" class="form-label text-secondary">Logo Navbar
                                :</label>
                            <div>
                                <img src={{ '/assets/images/' . $data_pengaturan->logo_navbar }}
                                    alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" class="w-50 mb-3">
                            </div>
                            <div>
                                <input type="file" id="pengaturan-logonavbar">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <label for="pengaturan-logoperusahaan" class="form-label text-secondary">Logo Perusahaan
                                :</label>
                            <div>
                                <img src={{ '/assets/images/' . $data_pengaturan->logo_perusahaan }}
                                    alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" class="w-50 mb-3">
                            </div>
                            <div>
                                <input type="file" id="pengaturan-logoperusahaan">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <label for="pengaturan-banner" class="form-label text-secondary">Banner
                                :</label>
                            <div>
                                <img src={{ '/assets/images/' . $data_pengaturan->banner }}
                                    alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" class="w-100 mb-3">
                            </div>
                            <div>
                                <input type="file" id="pengaturan-banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
