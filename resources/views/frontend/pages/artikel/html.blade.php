<?php
function excerpt($text, $limit = 150)
{
    $text = strip_tags($text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    if (strlen($text) <= $limit) {
        return $text;
    }
    return substr($text, 0, $limit) . '...';
}
?>

<section class="daftar-artikel container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="text-center mb-5">Menampilkan : {{ $judul_daftar }}</h3>
                <div class="row">
                    @forelse ($data_artikel as $item)
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body p-0">
                                    <div class="box-thumbnail-artikel">
                                        <img src="/uploads/artikel/{{ $item->thumbnail }}" class="w-100"
                                            alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                                    </div>
                                    <div class="p-3">
                                        <h5>{{ $item->judul }}</h5>
                                        <p>
                                            <small>
                                                {{ excerpt($item->konten) }}
                                            </small>
                                        </p>
                                        <p>
                                            <a href={{ '/artikel/' . $item->slug }}>baca selengkapnya</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                {{ $data_artikel->links() }}
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
