$("#caravan_detail_reg").click(function () {
    Notiflix.Confirm.show(
        "تایید ثبت مشخصات کاروان",
        "با تایید، اطلاعات کاروان ثبت شده و غیرقابل ویرایش خواهد بود، مطمئن هستید؟",
        "بله",
        "خیر",
        function okCb() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: "/saveCaravanDetail",
                data: $("#caravan_detail").serialize(),
                beforeSend: function () {
                    Notiflix.Loading.standard("لطفا کمی صبر کنید...");
                },
                success: function (data) {
                    if (data.errorCode == "1") {
                        Notiflix.Report.failure(
                            "خطا در ثبت اطلاعات",
                            data.errorMsg,
                            "تایید"
                        );
                    } else if (data.errorCode == "0") {
                        Notiflix.Report.success(
                            "ثبت موفق",
                            "ثبت اطلاعات کاروان با موفقیت انجام شد",
                            "تایید"
                        );
                    }
                },
                complete: function () {
                    Notiflix.Loading.remove();
                },
            });
        },
        function cancelCb() {
            Notiflix.Report.warning(
                "هشدار",
                "عملیات ثبت مشخصات کاروان لغو شد و اطلاعات ثبت نگردید، چنانچه قبلا مشخصات را ثبت کردید، این پیام را نادیده بگیرید.",
                "تایید می کنم",
                {
                    rtl: true,
                }
            );
        }
    );
});

// CaravanCoadmin
$("#caravan_coadmin_reg").click(function () {
    Notiflix.Confirm.show(
        "تایید ثبت مشخصات معاون کاروان",
        "با تایید، اطلاعات معاون کاروان ثبت شده و غیرقابل ویرایش خواهد بود، مطمئن هستید؟",
        "بله",
        "خیر",
        function okCb() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: "/saveCaravanCoadmin",
                data: $("#caravan_coadmin_detail").serialize(),
                beforeSend: function () {
                    Notiflix.Loading.standard("لطفا کمی صبر کنید...");
                },
                success: function (data) {
                    if (data.errorCode == "1") {
                        Notiflix.Report.failure(
                            "خطا در ثبت اطلاعات",
                            data.errorMsg,
                            "تایید"
                        );
                    } else if (data.errorCode == "0") {
                        Notiflix.Report.success(
                            "ثبت موفق",
                            "ثبت اطلاعات معاون کاروان با موفقیت انجام شد",
                            "تایید"
                        );
                    }
                },
                complete: function () {
                    Notiflix.Loading.remove();
                },
            });
        },
        function cancelCb() {
            Notiflix.Report.warning(
                "هشدار",
                "عملیات ثبت مشخصات معاون کاروان لغو شد و اطلاعات ثبت نگردید، چنانچه قبلا مشخصات را ثبت کردید، این پیام را نادیده بگیرید.",
                "تایید می کنم",
                {
                    rtl: true,
                }
            );
        }
    );
});

// CaravanRowhani
$("#caravan_rowhani_reg").click(function () {
    Notiflix.Confirm.show(
        "تایید ثبت مشخصات روحانی کاروان",
        "با تایید، اطلاعات روحانی کاروان ثبت شده و غیرقابل ویرایش خواهد بود، مطمئن هستید؟",
        "بله",
        "خیر",
        function okCb() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: "/saveCaravanRowhani",
                data: $("#caravan_rowhani_detail").serialize(),
                beforeSend: function () {
                    Notiflix.Loading.standard("لطفا کمی صبر کنید...");
                },
                success: function (data) {
                    if (data.errorCode == "1") {
                        Notiflix.Report.failure(
                            "خطا در ثبت اطلاعات",
                            data.errorMsg,
                            "تایید"
                        );
                    } else if (data.errorCode == "0") {
                        Notiflix.Report.success(
                            "ثبت موفق",
                            "ثبت اطلاعات روحانی کاروان با موفقیت انجام شد",
                            "تایید"
                        );
                    }
                },
                complete: function () {
                    Notiflix.Loading.remove();
                },
            });
        },
        function cancelCb() {
            Notiflix.Report.warning(
                "هشدار",
                "عملیات ثبت مشخصات روحانی کاروان لغو شد و اطلاعات ثبت نگردید، چنانچه قبلا مشخصات را ثبت کردید، این پیام را نادیده بگیرید.",
                "تایید می کنم",
                {
                    rtl: true,
                }
            );
        }
    );
});

// CaravanConnect
$("#caravan_connect_reg").click(function () {
    Notiflix.Confirm.show(
        "تایید ثبت مشخصات روحانی کاروان",
        "با تایید، اطلاعات رابط کاروان ثبت شده و غیرقابل ویرایش خواهد بود، مطمئن هستید؟",
        "بله",
        "خیر",
        function okCb() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: "/saveCaravanConnect",
                data: $("#caravan_connect_detail").serialize(),
                beforeSend: function () {
                    Notiflix.Loading.standard("لطفا کمی صبر کنید...");
                },
                success: function (data) {
                    if (data.errorCode == "1") {
                        Notiflix.Report.failure(
                            "خطا در ثبت اطلاعات",
                            data.errorMsg,
                            "تایید"
                        );
                    } else if (data.errorCode == "0") {
                        Notiflix.Report.success(
                            "ثبت موفق",
                            "ثبت اطلاعات رابط کاروان با موفقیت انجام شد",
                            "تایید"
                        );
                    }
                },
                complete: function () {
                    Notiflix.Loading.remove();
                },
            });
        },
        function cancelCb() {
            Notiflix.Report.warning(
                "هشدار",
                "عملیات ثبت مشخصات رابط کاروان لغو شد و اطلاعات ثبت نگردید، چنانچه قبلا مشخصات را ثبت کردید، این پیام را نادیده بگیرید.",
                "تایید می کنم",
                {
                    rtl: true,
                }
            );
        }
    );
});

// ==============
//pilgrim check
$("#pilgrim_melli").blur(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/pilgrimAvailableCheck",
        data: $("#pilgrim_detail").serialize(),
        beforeSend: function () {
            Notiflix.Block.pulse(".pilgrim_card_box", "لطفا کمی صبر کنید", {
                backgroundColor: "rgba(10,10,10,0.9)",
                svgColor: "#32c682",
                messageColor: "#32c682",
            });
            $("#pilgrim_name").val("");
            $("#pilgrim_family").val("");
            $("#pilgrim_fathername").val("");
            $("#pilgrim_sex").val("انتخاب کنید");
            $("#pilgrim_shenasname").val("");
            $("#pilgrim_birthdate").val("");
            $("#pilgrim_mobile").val("");
            $("#pilgrim_edu").val("انتخاب کنید");
            $("#pilgrim_email").val("");
        },
        success: function (data) {
            if (data.hasOwnProperty("hasError")) {
                Notiflix.Report.warning(
                    "هشدار",
                    "زائر با کد ملی درج شده، قبلا در کاروانی دیگر ثبت نام شده و امکان ثبت مجدد آن میسر نیست",
                    "تایید می کنم",
                    {
                        rtl: false,
                        fontFamily: "Shabnam",
                        cssAnimationStyle: "zoom",
                    }
                );
            } else if (data.hasOwnProperty("pilgrim_name")) {
                $("#pilgrim_name").val(data.pilgrim_name);
                $("#pilgrim_family").val(data.pilgrim_family);
                $("#pilgrim_fathername").val(data.pilgrim_fathername);
                $("#pilgrim_sex").val(data.pilgrim_sex);
                $("#pilgrim_shenasname").val(data.pilgrim_shenasname);
                $("#pilgrim_birthdate").val(data.pilgrim_birthdate);
                $("#pilgrim_mobile").val(data.pilgrim_mobile);
                $("#pilgrim_edu").val(data.pilgrim_education);
                $("#pilgrim_email").val(data.pilgrim_email);
            }
        },
        complete: function () {
            Notiflix.Block.remove(".pilgrim_card_box");
        },
    });
});

// ==============
//pilgrim add new
$("#pilgrim_detail_reg").click(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/pilgrimSave",
        data: $("#pilgrim_detail").serialize(),
        beforeSend: function () {
            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            if (data.hasOwnProperty("hasError") && data.hasError == "1") {
                Notiflix.Report.failure("خطا", data.msg, "بستن", {
                    rtl: false,
                    fontFamily: "Shabnam",
                    cssAnimationStyle: "zoom",
                });
            } else if (
                data.hasOwnProperty("hasError") &&
                data.hasError == "0"
            ) {
                Notiflix.Report.success(
                    "ثبت موفق اطلاعات زائر",
                    data.msg,
                    "بستن",
                    {
                        rtl: true,
                        fontFamily: "Shabnam",
                    }
                );
            }
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
});

//Make pilgrim Data Table
function makeTable() {
    $("#retrive_pilgrim_detail").hide();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: "POST",
        url: "/pilgrimTable",
        data: { UID: 8 },
        beforeSend: function () {
            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            console.log(data);
            $("#pilgrimTable").after(data.result);
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
}

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
