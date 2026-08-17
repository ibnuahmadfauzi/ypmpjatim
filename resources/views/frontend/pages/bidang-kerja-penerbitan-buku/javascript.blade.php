<script>
    $(document).ready(function() {

        // Menandai menu bidang kerja sebagai aktif
        $('.bidang-kerja-link').addClass('active');


        // ==============================
        // KONDISI AWAL
        // ==============================

        // Sembunyikan semua konten
        $('[id^="konten-"]').hide();

        // Tampilkan konten pertama
        $('#konten-form-penerbitan-buku').show();

        // Aktifkan menu pertama
        $('#menu-form-penerbitan-buku').addClass('active');


        // ==============================
        // KETIKA MENU DIKLIK
        // ==============================

        $('[id^="menu-"]').click(function(e) {

            // Mencegah href="#" berpindah ke atas halaman
            e.preventDefault();

            // Hapus active dari semua menu
            $('[id^="menu-"]').removeClass('active');

            // Tambahkan active ke menu yang diklik
            $(this).addClass('active');


            // Ambil ID menu
            let idMenu = $(this).attr('id');

            // Hilangkan "menu-"
            let namaMenu = idMenu.replace('menu-', '');


            // Sembunyikan semua konten
            $('[id^="konten-"]').hide();


            // Tampilkan konten yang sesuai
            $('#konten-' + namaMenu).show();

        });

    });
</script>
