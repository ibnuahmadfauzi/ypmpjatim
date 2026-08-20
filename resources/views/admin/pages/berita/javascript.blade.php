<script>
    $(document).ready(function() {

        $('.admin-berita-menu').addClass('active');

        $("#tableBerita").DataTable({
            responsive: true,

            autoWidth: false,

            pageLength: 10,

            ordering: false,

            language: {
                search: "Cari :",

                lengthMenu: "Tampilkan _MENU_ data",

                zeroRecords: "Data tidak ditemukan",

                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",

                infoEmpty: "Tidak ada data",

                paginate: {
                    previous: "Sebelumnya",

                    next: "Berikutnya",
                },
            },
        });

    });
</script>

<script>
    $(document).on('click', '.btn-hapus', function() {

        let id = $(this).data('id');

        Swal.fire({
            title: 'Hapus berita?',
            text: 'Data berita yang dihapus tidak dapat dikembalikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: '/admin/berita/' + id + '/delete',
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {

                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {

                            location.reload();

                        });

                    },

                    error: function(xhr) {

                        console.log(xhr);

                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Berita gagal dihapus.',
                            icon: 'error'
                        });

                    }
                });

            }

        });

    });
</script>
