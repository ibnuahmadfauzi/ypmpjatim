<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ route('client.home.get.bidangkerja') }}", // route Laravel
            type: "GET",
            dataType: "json",
            success: function(response) {
                let html = '';
                $.each(response, function(index, bidangkerja) {
                    html += `
                        <div class="col-lg-6">
                            <div class="box-bidangkerja shadow">
                                <img src="/assets/images/bidangkerja/${bidangkerja.gambar}" alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                                <div class="px-4 pb-4">
                                    <h4>${bidangkerja.nama_bidang}</h4>
                                    <p>${bidangkerja.deskripsi}</p>
                                    <div class="text-center">
                                        <a href="${bidangkerja.tautan}" class="btn btn-sm btn-primary"><i class="fa-solid fa-up-right-from-square"></i> Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#homepage-bidangkerja').html(html);
            },
            error: function(xhr, status, error) {
                console.error("Terjadi kesalahan: ", error);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        function generateExcerpt(text, limit = 20) {
            const cleanText = text.replace(/<\/?[^>]+(>|$)/g, "");
            const words = cleanText.split(/\s+/);
            if (words.length <= limit) {
                return words.join(" ");
            }
            return words.slice(0, limit).join(" ") + "...";
        }

        $.ajax({
            url: "{{ route('client.artikel.getLastArtikel') }}",
            type: "GET",
            dataType: "json",
            success: function (response) {
                let htmlLastArtikel = '';
                $.each(response, function (index, artikel) {
                    htmlLastArtikel += `
                        <a href="/artikel/${artikel.slug}" class="text-decoration-none text-dark">
                        <div class="artikel-berita-item-home">
                            <img src="/assets/images/artikel/${artikel.thumbnail}" alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur">
                            <div>
                                <p class="text-start fw-semibold">
                                    ${artikel.judul}
                                </p>
                                <div class="text-start">
                                    <small>${generateExcerpt(artikel.body)}</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    `;
                });
                $("#artikel-list-container").html(htmlLastArtikel);
            },
            error: function (xhr, status, error) {
                console.error("Terjadi kesalahan: ", error);
            },
        });
    });
</script>