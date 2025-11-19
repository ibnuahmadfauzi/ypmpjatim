<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ route('client.artikel.getLastArtikel') }}",
            type: "GET",
            dataType: "json",
            success: function (response) {
                let htmlLastArtikel = '';
                console.log(response);
                $.each(response, function (index, artikel) {
                    htmlLastArtikel += `
                        <a href="/artikel/${artikel.slug}" class="list-group-item list-group-item-action">${artikel.judul}</a>
                    `;
                });
                $("#sidebar-last-artikel").html(htmlLastArtikel);
            },
            error: function (xhr, status, error) {
                console.error("Terjadi kesalahan: ", error);
            },
        });
    });
</script>