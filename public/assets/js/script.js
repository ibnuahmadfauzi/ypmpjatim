$(document).ready(function () {
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
});
