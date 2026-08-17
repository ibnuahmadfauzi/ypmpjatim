<script>
    $(document).ready(function() {
        $('.bidang-kerja-link').addClass('active');

        $(document).ready(function() {

            // 1. Kondisi awal
            $('#konten-kenaikan-tingkat').show();

            $('#konten-perangkat-pembelajaran, \
       #konten-media-pembelajaran, \
       #konten-jabatan-fungsional, \
       #konten-sasaran-kerja-pegawai').hide();

            $('#menu-kenaikan-tingkat').addClass('active');


            // 2. Ketika menu diklik
            $('[id^="menu-"]').click(function() {

                // Hapus class active dari semua menu
                $('[id^="menu-"]').removeClass('active');

                // Tambahkan class active ke menu yang diklik
                $(this).addClass('active');

                // Ambil bagian nama setelah "menu-"
                let namaMenu = $(this).attr('id').replace('menu-', '');

                // Sembunyikan semua konten
                $('[id^="konten-"]').hide();

                // Tampilkan konten sesuai menu
                $('#konten-' + namaMenu).show();
            });

        });
    })
</script>
