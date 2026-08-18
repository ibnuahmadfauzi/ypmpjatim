<script>
    $(document).ready(function() {

        $('.bidang-kerja-link').addClass('active');

        // Kondisi awal
        $('#konten-portofolio-kegiatan').show();
        $('#konten-teknik-kerjasama').hide();

        $('#menu-portofolio-kegiatan').addClass('active');

        // Ketika menu diklik
        $('[id^="menu-"]').click(function(e) {

            e.preventDefault();

            // Hapus active dari semua menu
            $('[id^="menu-"]').removeClass('active');

            // Tambahkan active ke menu yang diklik
            $(this).addClass('active');

            // Ambil nama menu
            let namaMenu = $(this).attr('id').replace('menu-', '');

            // Sembunyikan semua konten
            $('[id^="konten-"]').hide();

            // Tampilkan konten sesuai menu
            $('#konten-' + namaMenu).show();

        });

    });
</script>
