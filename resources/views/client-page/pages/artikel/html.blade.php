<?php
    function generateExcerpt($text, $limit = 20)
    {
        $text = strip_tags($text);
        $words = preg_split('/\s+/', $text);
        if (count($words) <= $limit) {
            return implode(' ', $words);
        }
        return implode(' ', array_slice($words, 0, $limit)) . '...';
    }
?>

<div class="container-fluid bidang-kerja-page">
    <div class="container">
        <div class="my-5">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <main>
                                <div class="row">
                                    @forelse ($semua_artikel as $artikel)
                                        <div class="col-lg-6">
                                            <div class="card w-100 mb-3">
                                                <img src="/assets/images/artikel/{{ $artikel->thumbnail }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                                                    <p class="card-text">{{ generateExcerpt($artikel->body, 20) }}</p>
                                                    <a href="/artikel/{{ $artikel->slug }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h5 class="fw-normal text-center my-5">
                                            konten belum tersedia
                                        </h5>
                                    @endforelse
                                </div>
                                {{ $semua_artikel->links() }}
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