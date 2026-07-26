<div class="card border-0">
    <div class="card-body">
        <div class="judul-konten">
            <h4>Daftar Anggota</h4>
        </div>
        <hr>
        <div>
            <div class="table-responsive">
                <table id="tableDaftarMember" class="table table-hover align-middle w-100">
                    <thead>
                        <tr>
                            <th>Nama Member</th>
                            <th>Email</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_member as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <button class="btn btn-success text-light btn-sm">
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
