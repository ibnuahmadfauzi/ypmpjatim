<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Editor</h4>
        </div>
        <hr>
        <div>
            <form action="{{ route('admin.berita.update', $data_berita->id) }}" method="POST" id="form-berita"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="judul-berita" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" value="{{ $data_berita->judul }}" name="judul-berita"
                        id="judul-berita">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="konten-berita" class="form-label">Konten</label>
                        <textarea name="konten-berita" id="konten-berita" class="form-control" rows="30">{{ $data_berita->konten }}</textarea>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <label for="thumbnail-berita" class="form-label">Thumbnail</label>
                            <img src="https://pngmagic.com/webp_images/youtube-thumbnail-size-with-aspect-ratio-169_KVG.webp"
                                class="w-100" alt="">
                            <input type="file" id="thumbnail-berita" class="mt-2" name="thumbnail-berita">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <button type="reset" class="btn btn-secondary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
