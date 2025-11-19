<?php
    function formatTanggalIndo($tanggal)
    {
        $bulan = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        $pecah = explode('-', substr($tanggal, 0, 10));
        return $pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];
    }

    $categories = str_replace("'", '"', $artikel->categories);
    $categories = json_decode($categories, true);
?>

<div class="container-fluid bidang-kerja-page">
    <div class="container">
        <div class="my-5">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <main>
                                <div class="mb-4">
                                    <a href="{{ route('client.home.index') }}" class="text-decoration-none text-primary">Home</a> / <a href="{{ route('client.artikel.index') }}" class="text-decoration-none text-primary">Artikel</a>
                                </div>

                                <div class="mb-4">
                                    <h2 class="fw-semibold">
                                        {{ $artikel->judul }}
                                    </h2>
                                    <small>
                                        {{ formatTanggalIndo($artikel->created_at) }}
                                    </small>
                                </div>

                                <div class="mb-4">
                                    <img src="/assets/images/artikel/{{ $artikel->thumbnail }}" alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" class="w-100 rounded-2">
                                </div>

                                <div class="mb-4">
                                    {!! $artikel->body !!}
                                </div>

                                <div>
                                    @foreach ($categories ?? [] as $category)
                                        <span class="badge bg-primary">{{ $category }}</span>
                                    @endforeach
                                </div>
                            </main>
                        </div>
                        <div class="col-lg-4">
                            @include('client-page.partials.sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>