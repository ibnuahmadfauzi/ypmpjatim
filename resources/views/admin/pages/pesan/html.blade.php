<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Pesan</h4>
        </div>
        <hr>
        <div>
            <div class="table-responsive">
                <table id="tablePesan" class="table table-hover align-middle w-100">
                    <thead>
                        <tr>
                            <th>Subjek</th>
                            <th>Status</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_pesan as $item)
                            <tr>
                                <td>{{ $item->subjek }}</td>
                                <td>
                                    @if ($item->status == 'Belum Dibaca')
                                        <span class="badge text-bg-danger">{{ $item->status }}</span>
                                    @else
                                        <span class="badge text-bg-primary">{{ $item->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info text-light btn-sm">
                                        <i class="fa-solid fa-eye"></i>
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
