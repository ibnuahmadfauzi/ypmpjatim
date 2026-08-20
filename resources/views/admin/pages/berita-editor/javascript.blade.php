<script>
    $(document).ready(function() {
        $('.admin-berita-menu').addClass('active');
    })
</script>

<script>
    $(document).ready(function() {

        $('#form-berita').submit(function(e) {

            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,

                processData: false,
                contentType: false,

                success: function(response) {
                    Swal.fire({
                        title: "Terkirim!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/admin/berita';
                        }
                    });
                },

                error: function(xhr) {

                    console.log(xhr.responseJSON);

                    if (xhr.status === 422) {

                        let errors = xhr.responseJSON.errors;

                        let pesan = '';

                        $.each(errors, function(key, value) {
                            pesan += value[0] + '\n';
                        });

                        Swal.fire({
                            title: "Terkirim!",
                            text: 'Terjadi kesalahan saat mengunggah berita.',
                            icon: "error",
                        });

                    } else {

                        Swal.fire({
                            title: "Terkirim!",
                            text: 'Terjadi kesalahan saat mengunggah berita.',
                            icon: "error",
                        });

                    }

                }

            });

        });

    });
</script>
