
//Show data
function getPilgrimData(pid, index) {
    if (
        document.getElementById("user0" + index).getAttribute("is-exp") == "0"
    ) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "/pinfo",
            data: { UID: pid },
            beforeSend: function () {
                Notiflix.Block.hourglass(".js-element" + index, 'لطفا کمی صبر کنید');
            },
            success: function (data) {
                if (data.status == "OK") {
                    $("#user0" + index).text('نام کاروان: ' + data.pdata.caravan_name + ' - ' + 'شهر: ' + data.pdata.admin_city);
                    $("#auser0" + index).text('مدیر کاروان: ' + data.pdata.admin_name + ' ' + data.pdata.admin_family + ' - شماره مدیر ' + data.pdata.admin_mobile);
                }
            },
            complete: function () {
                Notiflix.Block.remove(".js-element" + index);
            },
        });

        document.getElementById("user0" + index).setAttribute("is-exp", "1");
    }
}
