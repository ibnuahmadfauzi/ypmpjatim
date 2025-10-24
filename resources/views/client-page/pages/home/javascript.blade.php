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
                                <img src="/assets/images/bidangkerja/${bidangkerja.gambar}">
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