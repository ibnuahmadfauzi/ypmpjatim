<script>
    $(document).ready(function() {
        var menuBtn = [
            "menu-kenaikantingkat",
            "menu-perangkatpembelajaran",
            "menu-mediapembelajaran",
            "menu-jabatanfungsional",
            "menu-sasarankerjapegawai"
        ];

        var menuCanvas = [
            "canvas-kenaikantingkat",
            "canvas-perangkatpembelajaran",
            "canvas-mediapembelajaran",
            "canvas-jabatanfungsional",
            "canvas-sasarankerjapegawai"
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