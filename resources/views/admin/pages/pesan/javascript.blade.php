<script>
    $(document).ready(function() {
        $('.admin-pesan-menu').addClass('active');
        $("#tablePesan").DataTable({
            responsive: true,

            autoWidth: false,

            pageLength: 10,

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

            columnDefs: [{
                orderable: false,
                targets: 1,
            }, ],
        });
    })
</script>
