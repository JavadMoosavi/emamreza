// ==============
//fetch Data
$("#admin_melli").blur(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/fetchAllData",
        data: {
            adminMelliCode: $("#admin_melli").val(),
        },
        beforeSend: function () {
            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            // console.log(data);
            if (data.hasOwnProperty("hasError")) {
                if (data.hasError == "yes") {
                    Notiflix.Report.failure(
                        "هشدار",
                        data.result,
                        "تایید می کنم",
                        {
                            rtl: false,
                            fontFamily: "Shabnam",
                            cssAnimationStyle: "zoom",
                        }
                    );

                    $("#admin_melli").removeClass("is-invalid");
                    $("#admin_melli").removeClass("is-valid");

                    $("#cuid").val("");
                    $("#fno").val("");

                    $("#carvan_id").text("");
                    $("#caravan_file_no").text("");
                    $("#verify_state").text("");

                    $("#admin_name").val("");
                    $("#admin_family").val("");

                    $("#admin_fathername").val("");
                    $("#admin_shenasname").val("");
                    $("#admin_birthday").val("");

                    $("#village").val("");
                    $("#address").val("");
                    $("#zipcode").val("");
                    $("#admin_mobile").val("");
                    $("#admin_phone").val("");
                    $("#admin_email").val("");

                    $("#caravan_name").val("");
                    $("#start_date").val("");
                    $("#days").val("");

                    $("#man").val("");
                    $("#old_man").val("");
                    $("#woman").val("");
                    $("#woman_old").val("");

                    $("#rowhani_name").val("");
                    $("#rowhani_family").val("");
                    $("#rowhani_melli").val("");
                    $("#rowhani_code").val("");

                    $("#rowhani_shenasname").val("");
                    $("#rowhani_fathername").val("");
                    $("#rowhani_birthdate").val("");
                    $("#rowhani_mobile").val("");

                    $("#rowhani_email").val("");

                    $("#coadmin_name").val("");
                    $("#coadmin_family").val("");
                    $("#coadmin_melli").val("");

                    $("#coadmin_shenasname").val("");
                    $("#coadmin_fathername").val("");
                    $("#coadmin_birthdate").val("");
                    $("#coadmin_mobile").val("");

                    $("#coadmin_email").val("");

                    $("#connect_name").val("");
                    $("#connect_family").val("");
                    $("#connect_melli").val("");

                    $("#connect_shenasname").val("");
                    $("#connect_fathername").val("");
                    $("#connect_birthdate").val("");
                    $("#connect_mobile").val("");

                    $("#connect_email").val("");
                } else if (data.hasError == "no") {
                    $("#admin_melli")
                        .addClass("is-valid")
                        .removeClass("is-invalid");

                    $("#cuid").val(data.result.caravan_UUID);
                    $("#fno").val(data.result.caravan_human_id);

                    $("#carvan_id").text(data.result.caravan_UUID);
                    $("#caravan_file_no").text(data.result.caravan_human_id);
                    $("#verify_state").text(data.result.verified);

                    $("#admin_name").val(data.result.admin_name);
                    $("#admin_family").val(data.result.admin_family);
                    $("#admin_sex").val(data.result.admin_sex);
                    $("#admin_fathername").val(data.result.admin_fathername);
                    $("#admin_shenasname").val(data.result.admin_shenasname);
                    $("#admin_birthday").val(data.result.admin_birthdate);
                    $("#admin_education").val(data.result.admin_education);
                    $("#province").val(data.result.admin_province);
                    $("#city").val(data.result.admin_city);
                    $("#village").val(data.result.admin_village);
                    $("#address").val(data.result.admin_address);
                    $("#zipcode").val(data.result.admin_zipcode);
                    $("#admin_mobile").val(data.result.admin_mobile);
                    $("#admin_phone").val(data.result.admin_phone);
                    $("#admin_email").val(data.result.admin_email);

                    $("#caravan_name").val(data.result.caravan_name);
                    $("#start_date").val(data.result.start_date);
                    $("#days").val(data.result.duration);
                    $("#route").val(data.result.route);
                    $("#entrance_date").val(data.result.entrance);
                    $("#exit_date").val(data.result.exit);
                    $("#man").val(data.result.pilgrim_man);
                    $("#man_old").val(data.result.pilgrim_man_old);
                    $("#woman").val(data.result.pilgrim_woman);
                    $("#woman_old").val(data.result.pilgrim_woman_old);

                    $("#rowhani_name").val(data.result.rowhani_name);
                    $("#rowhani_family").val(data.result.rowhani_family);
                    $("#rowhani_melli").val(data.result.rowhani_melli);
                    $("#rowhani_code").val(data.result.rowhani_code);
                    $("#rowhani_sex").val(data.result.rowhani_sex);
                    $("#rowhani_shenasname").val(
                        data.result.rowhani_shenasname
                    );
                    $("#rowhani_fathername").val(
                        data.result.rowhani_fathername
                    );
                    $("#rowhani_birthdate").val(data.result.rowhani_birthdate);
                    $("#rowhani_mobile").val(data.result.rowhani_mobile);
                    $("#rowhani_edu").val(data.result.rowhani_education);
                    $("#rowhani_email").val(data.result.rowhani_email);

                    $("#coadmin_name").val(data.result.coadmin_name);
                    $("#coadmin_family").val(data.result.coadmin_family);
                    $("#coadmin_melli").val(data.result.coadmin_melli);
                    $("#coadmin_sex").val(data.result.coadmin_sex);
                    $("#coadmin_shenasname").val(
                        data.result.coadmin_shenasname
                    );
                    $("#coadmin_fathername").val(
                        data.result.coadmin_fathername
                    );
                    $("#coadmin_birthdate").val(data.result.coadmin_birthdate);
                    $("#coadmin_mobile").val(data.result.coadmin_mobile);
                    $("#coadmin_edu").val(data.result.coadmin_education);
                    $("#coadmin_email").val(data.result.coadmin_email);

                    $("#connect_name").val(data.result.connect_name);
                    $("#connect_family").val(data.result.connect_family);
                    $("#connect_melli").val(data.result.connect_melli);
                    $("#connect_sex").val(data.result.connect_sex);
                    $("#connect_shenasname").val(
                        data.result.connect_shenasname
                    );
                    $("#connect_fathername").val(
                        data.result.connect_fathername
                    );
                    $("#connect_birthdate").val(data.result.connect_birthdate);
                    $("#connect_mobile").val(data.result.connect_mobile);
                    $("#connect_edu").val(data.result.connect_education);
                    $("#connect_email").val(data.result.connect_email);
                }
            }
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
});

// CaravanFinal Check
function finalCheck() {
    Notiflix.Confirm.show(
        "تایید نهایی کاروان",
        "با تایید نهایی، کاروان مجوز ثبت زائرین دریافت می نمایید. این عمل غیرقابل بازگشت است",
        "تایید نهایی",
        "انصراف",
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
                url: "/caravanFinalCheck",
                data: {
                    cuid: $("#cuid").val(),
                    fno: $("#fno").val(),
                },
                beforeSend: function () {
                    Notiflix.Loading.standard("لطفا کمی صبر کنید...");
                },
                success: function (data) {
                    if (data.hasError == "yes") {
                        Notiflix.Report.failure(
                            "خطا در ثبت اطلاعات",
                            data.result,
                            "تایید"
                        );
                    } else if (data.hasError == "no") {
                        Notiflix.Report.success(
                            "ثبت موفق",
                            data.result,
                            "تایید"
                        );
                        $("#verify_state").text("تایید نهایی شده");
                    }
                },
                complete: function () {
                    Notiflix.Loading.remove();
                },
            });
        }
    );
}

// ==============
//pilgrim add new
$("#updateall").click(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/caravanUpdateAll",
        data: $("#allCaravanData").serialize(),
        beforeSend: function () {
            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            // console.log(data);
            if (data.hasOwnProperty("hasError") && data.hasError == "yes") {
                Notiflix.Report.failure(
                    "خطا",
                    "خطا در به روز رسانی اطلاعات کاروان",
                    "بستن",
                    {
                        rtl: false,
                        fontFamily: "Shabnam",
                        cssAnimationStyle: "zoom",
                    }
                );
            } else if (
                data.hasOwnProperty("hasError") &&
                data.hasError == "no"
            ) {
                Notiflix.Report.success(
                    "ثبت موفق اطلاعات زائر",
                    "اطلاعات کاروان با موفقیت به روز شد",
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

// pilgrim check/Update
$("#updatePilgrim").click(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/pilgrimAdminUpdate",
        data: $("#pilgrimData").serialize(),
        beforeSend: function () {
            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            console.log(data);
            // if (data.hasOwnProperty('hasError') && data.hasError == 'yes') {

            //     Notiflix.Report.failure(
            //         'خطا',
            //         'خطا در به روز رسانی اطلاعات کاروان',
            //         'بستن',
            //         {
            //             rtl: false,
            //             fontFamily: 'Shabnam',
            //             cssAnimationStyle: 'zoom',
            //         },
            //     );
            // }
            // else if (data.hasOwnProperty('hasError') && data.hasError == 'no') {
            //     Notiflix.Report.success(
            //         'ثبت موفق اطلاعات زائر',
            //         'اطلاعات کاروان با موفقیت به روز شد',
            //         'بستن',
            //         {
            //             rtl: true,
            //             fontFamily: 'Shabnam',
            //         },
            //     );
            // }
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
});

// pilgrim check OLNY
$("#pilgrim_melli").blur(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/adminPilgrimAvailableCheck",
        data: { pilgrim_melli: $("#pilgrim_melli").val() },
        beforeSend: function () {
            $("#carvan_id").text('');
            $("#carvan_name").text('');
            $("#home_name").text('');
            $("#home_id").text('');
            // $('#carvan_id').text(data.info.pilgrim_caravan_UUID);

            $("#pilgrim_mid").val('');

            $("#pilgrim_name").val('');
            $("#pilgrim_family").val('');
            $("#pilgrim_fathername").val('');
            $("#pilgrim_sex").val('');
            $("#pilgrim_shenasname").val('');
            $("#pilgrim_birthdate").val('');
            $("#pilgrim_mobile").val('');
            $("#pilgrim_edu").val('');
            $("#pilgrim_email").val('');

            Notiflix.Loading.standard("لطفا کمی صبر کنید...");
        },
        success: function (data) {
            console.log(data);
            if (data.hasOwnProperty("info")) {
                $("#carvan_id").text(data.info.pilgrim_caravan_UUID);
                $("#carvan_name").text(data.caravaName);
                $("#home_name").text(data.homeName);
                $("#home_id").text(data.info.pilgrim_home_UUID);
                // $('#carvan_id').text(data.info.pilgrim_caravan_UUID);

                $("#pilgrim_mid").val(data.info.pilgrim_melli);

                $("#pilgrim_name").val(data.info.pilgrim_name);
                $("#pilgrim_family").val(data.info.pilgrim_family);
                $("#pilgrim_fathername").val(data.info.pilgrim_fathername);
                $("#pilgrim_sex").val(data.info.pilgrim_sex);
                $("#pilgrim_shenasname").val(data.info.pilgrim_shenasname);
                $("#pilgrim_birthdate").val(data.info.pilgrim_birthdate);
                $("#pilgrim_mobile").val(data.info.pilgrim_mobile);
                $("#pilgrim_edu").val(data.info.pilgrim_education);
                $("#pilgrim_email").val(data.info.pilgrim_email);
            }
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
});
