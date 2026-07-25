<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Bidang Kerja</h4>
        </div>
        <hr>
        <div>
            <div class="table-responsive">
                <table id="tableBidangKerja" class="table table-hover align-middle w-100">
                    <thead>
                        <tr>
                            <th>Nama Bidang Kerja</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_bidang_kerja as $item)
                            <tr>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <button class="btn btn-warning text-light btn-sm">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">
                                    <h3 class="text-center py-5">
                                        belum ada data
                                    </h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
