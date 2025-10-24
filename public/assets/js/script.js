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
});
