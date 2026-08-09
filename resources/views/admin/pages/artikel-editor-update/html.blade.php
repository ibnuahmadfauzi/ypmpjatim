<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Editor</h4>
        </div>
        <hr>
        <div>
            <form action="{{ route('admin.artikel.update', $data_artikel->id) }}" method="POST" id="form-artikel"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="judul-artikel" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" value="{{ $data_artikel->judul }}" name="judul-artikel"
                        id="judul-artikel">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="konten-artikel" class="form-label">Konten</label>
                        <textarea name="konten-artikel" id="konten-artikel" class="form-control" rows="30">{{ $data_artikel->konten }}</textarea>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <label for="thumbnail-artikel" class="form-label">Thumbnail</label>
                            <img src="https://pngmagic.com/webp_images/youtube-thumbnail-size-with-aspect-ratio-169_KVG.webp"
                                class="w-100" alt="">
                            <input type="file" id="thumbnail-artikel" class="mt-2" name="thumbnail-artikel">
                        </div>
                        <div class="mb-4">
                            <label for="kategori-artikel" class="form-label">Kategori</label>
                            <textarea name="kategori-artikel" id="kategori-artikel" class="form-control" rows="10">{{ $data_artikel->kategori }}</textarea>
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
