<script>
    $(document).ready(function() {
        $('.form-cari').on('submit', function(e) {
            e.preventDefault();
            let keyword = $('#keyword-cari-artikel').val();
            if (keyword == "") {
                window.location = `/artikel/`;
            } else {
                window.location = `/artikel/cari/${keyword}`;
            }
        });
    });
</script>
