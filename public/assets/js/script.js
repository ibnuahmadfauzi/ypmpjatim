$(document).ready(function () {
    // ===========================================================
    // setup ajax general setting
    // ===========================================================
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // ===========================================================
    // end setup ajax general setting
    // ===========================================================

    // ===========================================================
    // get partner data to display in footer
    // ===========================================================
    $.ajax({
        url: urlGetPartner,
        type: "GET",
        dataType: "json",
        success: function (response) {
            let html = "";
            $.each(response, function (index, partner) {
                html += `
                    <img src="/assets/images/partner/${partner.logo}" alt="Yayasan Pengembangan Mutu Pendidikan - Jawa Timur" />
                `;
            });
            $("#partner-list").html(html);
        },
        error: function (xhr, status, error) {
            console.error("Terjadi kesalahan: ", error);
        },
    });
    // ===========================================================
    // end get partner data to display in footer
    // ===========================================================

    // ===========================================================
    // get kontak data to display in footer
    // ===========================================================
    $.ajax({
        url: urlGetKontak,
        type: "GET",
        dataType: "json",
        success: function (response) {
            $(".footer-alamat").text(response.alamat);
            $(".footer-email").text(response.email);
            let noHp = response.telepon;
            noHp = noHp.replace(/[\[\]"]/g, "");
            noHp = noHp.split(",");
            noHp = noHp.map((item) => item.trim());
            let htmlNoHp = "";
            noHp.forEach((item) => {
                if (!item.startsWith("0")) item = "0" + item;
                item = item.replace(/(\d{4})(\d{4})(\d{3,4})/, "$1-$2-$3");
                htmlNoHp += item + "<br>";
            });
            $(".footer-telepon").html(htmlNoHp);
        },
        error: function (xhr, status, error) {
            console.error("Terjadi kesalahan: ", error);
        },
    });
    // ===========================================================
    // end get kontak data to display in footer
    // ===========================================================

    // ===========================================================
    // store pesan post to database
    // ===========================================================
    $("#footer-pesan-form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: urlStorePesan,
            type: "POST",
            data: {
                nama: $("#input-pesan-nama").val(),
                email: $("#input-pesan-email").val(),
                subjek: $("#input-pesan-subjek").val(),
                pesan: $("#input-pesan-pesan").val(),
            },
            success: function (response) {
                Swal.fire({
                    title: "Pesan Terkirim",
                    text: "kami akan balas melalui email yang tertera",
                    icon: "success",
                });
            },
            error: function (xhr) {
                Swal.fire({
                    title: "Pesan Gagal Terkirim",
                    text: "periksa koneksi internet anda",
                    icon: "error",
                });
            },
        });

        $("#input-pesan-nama").val("");
        $("#input-pesan-email").val("");
        $("#input-pesan-subjek").val("");
        $("#input-pesan-pesan").val("");
    });
    // ===========================================================
    // end store pesan post to database
    // ===========================================================

    // Member Area Temprorary Button
    $(".memberarea-btn").on("click", function () {
        Swal.fire({
            title: "Pemberitahuan",
            text: "mohon maaf fitur belum tersedia",
            icon: "warning",
            confirmButtonText: "Tutup",
        });
    });
});
