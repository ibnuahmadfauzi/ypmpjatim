<script>
    $(document).ready(function() {
        var menuBtn = [
            "menu-formpenerbitanbuku",
            "menu-produk",
            "menu-royalti",
            "menu-selfpublishing",
            "menu-joinmodal",
            "menu-paketpenerbitandosen",
            "menu-paketpenerbitanguru",
            "menu-paketpenerbitanpelajar"
        ];

        var menuCanvas = [
            "canvas-formpenerbitanbuku",
            "canvas-produk",
            "canvas-royalti",
            "canvas-selfpublishing",
            "canvas-joinmodal",
            "canvas-paketpenerbitandosen",
            "canvas-paketpenerbitanguru",
            "canvas-paketpenerbitanpelajar"
        ];

        for (let i = 0; i < menuCanvas.length; i++) {
            if (i === 0) {
                $('#' + menuCanvas[i]).show();
                $('#' + menuBtn[i]).addClass("active");
            } else {
                $('#' + menuCanvas[i]).hide();
            }
        }

        for (let i = 0; i < menuBtn.length; i++) {
            $('#' + menuBtn[i]).on('click', function() {
                for (let j = 0; j < menuCanvas.length; j++) {
                    $('#' + menuCanvas[j]).hide();
                    $('#' + menuBtn[j]).removeClass("active");
                }
                $('#' + menuCanvas[i]).fadeIn("slow");
                $('#' + menuBtn[i]).addClass("active");
            })
        }
    })
</script>

<script>
    // Penerbitan Buku
    $(document).ready(function() {
        $('#pengajuanbuku-form').on('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Pemberitahuan",
                text: "mohon maaf fitur belum tersedia",
                icon: "warning",
                confirmButtonText: "Tutup"
            });
        });
    });
</script>