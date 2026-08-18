<section id="bidang-kerja-diklat" class="container-fluid">
    <div class="container my-4">
        <div class="row">

            <!-- Menu -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="card-body">

                        <h5 class="bg-primary text-light text-center m-0 py-2 fw-normal rounded-2">
                            <i class="fa-solid fa-bars"></i> Menu Bidang
                        </h5>

                        <div class="list-group my-3">

                            <a href="#" class="list-group-item list-group-item-action"
                                id="menu-portofolio-kegiatan">
                                Portofolio Kegiatan
                            </a>

                            <a href="#" class="list-group-item list-group-item-action" id="menu-teknik-kerjasama">
                                Teknik Kerjasama
                            </a>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Konten -->
            <div class="col-lg-8">
                <div class="card border-0">
                    <div class="card-body">

                        <div id="konten-portofolio-kegiatan">
                            <h4>Portofolio Kegiatan</h4>
                            <hr>
                            <!-- Slider Diklat, Workshop, Seminar -->
                            <div class="diklat-slider">
                                <div id="sliderDiklat" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                    data-bs-interval="3000">

                                    <!-- Indikator -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#sliderDiklat" data-bs-slide-to="0"
                                            class="active" aria-current="true"></button>
                                        <button type="button" data-bs-target="#sliderDiklat"
                                            data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#sliderDiklat"
                                            data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#sliderDiklat"
                                            data-bs-slide-to="3"></button>
                                        <button type="button" data-bs-target="#sliderDiklat"
                                            data-bs-slide-to="4"></button>
                                    </div>

                                    <!-- Gambar -->
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/images/diklat-workshop-seminar/diklat-1.png') }}"
                                                class="d-block w-100" alt="Diklat 1">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/diklat-workshop-seminar/diklat-2.png') }}"
                                                class="d-block w-100" alt="Diklat 2">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/diklat-workshop-seminar/diklat-3.png') }}"
                                                class="d-block w-100" alt="Diklat 3">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/diklat-workshop-seminar/diklat-4.png') }}"
                                                class="d-block w-100" alt="Diklat 4">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/diklat-workshop-seminar/diklat-5.png') }}"
                                                class="d-block w-100" alt="Diklat 5">
                                        </div>

                                    </div>

                                    <!-- Tombol Sebelumnya -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#sliderDiklat"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <!-- Tombol Berikutnya -->
                                    <button class="carousel-control-next" type="button" data-bs-target="#sliderDiklat"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div id="konten-teknik-kerjasama">
                            <h4>Teknik Kerjasama</h4>
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
