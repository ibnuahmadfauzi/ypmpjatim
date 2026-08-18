<script>
    $(document).ready(function() {

        // Menandai menu bidang kerja sebagai aktif
        $('.bidang-kerja-link').addClass('active');

        $('.btn-upload-jurnal').on('click', function() {
            Swal.fire({
                title: "Mohon Maaf",
                text: "Fitur belum tersedia",
                icon: "warning"
            });
        })

    });
</script>
