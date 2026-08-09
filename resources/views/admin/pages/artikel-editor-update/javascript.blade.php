<script>
    $(document).ready(function() {
        $('.admin-artikel-menu').addClass('active');
    })
</script>

<script>
    $(document).ready(function() {

        $('#form-artikel').submit(function(e) {

            e.preventDefault();

            let form = this;
            let formData = new FormData(form);

            $.ajax({

                url: $(form).attr('action'),

                type: 'POST',

                data: formData,

                processData: false,

                contentType: false,

                success: function(response) {

                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {

                        if (result.isConfirmed) {
                            window.location.href = '/admin/artikel';
                        }

                    });

                },

                error: function(xhr) {

                    console.log(xhr.responseText);

                    if (xhr.status === 422) {

                        let errors = xhr.responseJSON.errors;

                        let pesan = '';

                        $.each(errors, function(key, value) {

                            pesan += value[0] + '<br>';

                        });

                        Swal.fire({
                            title: 'Data tidak valid!',
                            html: pesan,
                            icon: 'error'
                        });

                    } else {

                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Artikel gagal diperbarui.',
                            icon: 'error'
                        });

                    }

                }

            });

        });

    });
</script>
