$(document).ready(function () {
    $("#formPesan").submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "/pesan",
            type: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                nama: $('input[name="pesanNama"]').val(),
                email: $('input[name="pesanEmail"]').val(),
                subjek: $('input[name="pesanSubjek"]').val(),
                pesan: $('textarea[name="pesanPesan"]').val(),
                status: "Belum Dibaca",
            },
            success: function (res) {
                Swal.fire({
                    title: "Terkirim!",
                    text: "Cek email untuk melihat balasan dari kami!",
                    icon: "success",
                });
                $("#formPesan")[0].reset();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Pesan gagal terkirim!",
                    icon: "error",
                });
            },
        });
    });
});
