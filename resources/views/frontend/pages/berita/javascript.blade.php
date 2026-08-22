<script>
    $(document).ready(function() {
        $('.form-cari').on('submit', function(e) {
            e.preventDefault();
            let keyword = $('#keyword-cari-berita').val();
            if (keyword == "") {
                window.location = `/berita/`;
            } else {
                window.location = `/berita/cari/${keyword}`;
            }
        });
    });
</script>
