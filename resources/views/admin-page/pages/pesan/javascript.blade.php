<script>
    $(document).ready(function() {
        $('#pesan-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.pesan.getPesanDatatables') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'subjek', name: 'subjek' },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data) {
                        if (data === "Belum Dibaca") {
                            return `<span class="badge text-bg-danger">${data}</span>`;
                        } else {
                            return `<span class="badge text-bg-secondary">${data}</span>`;
                        }
                    }
                },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>