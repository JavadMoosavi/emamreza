$("#registerBtn").click(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/savecaravan",
        data: {
            name: $('#name').val(),
            family: $('#family').val(),
            melli: $('#melli').val(),
            birthday: $('#birthday').val(),
            mobile: $('#mobile').val(),
            email: $('#email').val(),
            shenasname: $('#shenasname').val(),
            fathername: $('#fathername').val(),
            education: $('#education').val(),
            sex: $('#sex').val(),
            caravan: $('#caravan').val(),
            city: $('#city').val(),
            province: $('#province').val(),
            village: $('#village').val(),
            address: $('#address').val(),
            phone: $('#phone').val(),
            zipcode: $('#zipcode').val(),
        },
        beforeSend: function () {
            Notiflix.Loading.standard('لطفا کمی صبر کنید...');
        },
        success: function (data) {

           
            
            if (data.errorCode == '0') {
                window.location.href = "/cregister";
            }
            else if (data.errorCode == '1') {
                Notiflix.Report.failure(
                    'خطا در ثبت فرم',
                    'کد ملی ثبت شده تکراری است',
                    'تایید',
                );
            }
            else if (data.errorCode == '2') {
                Notiflix.Report.failure(
                    'خطا در ثبت فرم',
                    'شماره موبایل ثبت شده تکراری است',
                    'تایید',
                );
            }
            else if (data.errorCode == '3') {
                Notiflix.Report.failure(
                    'خطا در ثبت فرم',
                    'فرم ثبت نشد، لطفا بتدا خطاهای مشخص شده را برطرف نمایید',
                    'تایید',
                );
            }
        },
        complete: function () {
            Notiflix.Loading.remove();
        },
    });
});


function validate_melli() {

    if ($("#melli").val().length != 10 || isNaN($("#melli").val())) {
        $("#melli").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'کد ملی باید یک عدد ده رقمی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#melli").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_name() {

    if ($("#name").val().length == 0 || $("#name").val() == null) {
        $("#name").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'نام نمی تواند خالی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#name").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_family() {

    if ($("#family").val().length == 0 || $("#family").val() == null) {
        $("#family").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'نام خانوادگی نمی تواند خالی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#family").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_fathername() {

    if ($("#fathername").val().length == 0 || $("#fathername").val() == null) {
        $("#fathername").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'نام پدر نمی تواند خالی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#fathername").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_shenasname() {

    if ($("#shenasname").val().length == 0 || $("#shenasname").val() == null || isNaN($("#shenasname").val())) {
        $("#shenasname").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'شماره شناسنامه باید به صورت عددی وارد شود',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#shenasname").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_birthday() {

    if ($("#birthday").val().length != 10 || $("#birthday").val() == null) {
        $("#birthday").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'تاریخ تولد را به طور دقیق انتخاب نمایید',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#birthday").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_education() {

    if ($("#education").val().length == 0 || $("#education").val() == '0' || $("#education").val() == '0') {
        $("#education").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'تحصیلات را انتخاب نمایید',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#education").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_sex() {


    if ($("#sex").val() == '0' || $("#sex").val() == 0) {
        $("#sex").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'جنسیت را انتخاب نمایید',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#sex").addClass("is-valid").removeClass("is-invalid");
    }
    
}

function validate_caravan() {

    if ($("#caravan").val().length == 0 || $("#caravan").val() == null) {
        $("#caravan").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'نام کاروان نمی تواند خالی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#caravan").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_province() {

    if ($("#province").val() == 0 || $("#province").val() == '0') {
        $("#province").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'استان انتخاب نشده است',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#province").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_city() {

    if ($("#province").val() == 0 || $("#province").val() == '0') {
        $("#city").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'شهر انتخاب نشده است',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#city").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_address() {

    if ($("#address").val().length == 0 || $("#address").val() == null) {
        $("#address").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'آدرس وارد نشده است',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#address").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_mobile() {

    if ($("#mobile").val().length != 11 || $("#mobile").val().substr(0, 2) != '09') {
        $("#mobile").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'موبایل باید یک عدد یازده رقمی باشد که با 09 شروع می شود',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#mobile").addClass("is-valid").removeClass("is-invalid");
    }
}



function validate_phone() {

    if ($("#phone").val().length != 11 || $("#phone").val() == null) {
        $("#phone").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'تلفن ثابت به درستی وارد نشده است',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#phone").addClass("is-valid").removeClass("is-invalid");
    }
}

function validate_zipcode() {

    if ($("#zipcode").val().length != 10 || isNaN($("#zipcode").val())) {
        $("#zipcode").addClass("is-invalid").removeClass("is-valid");
        Notiflix.Notify.failure(
            'کد پستی باید یک عدد ده رقمی باشد',
            {
                position: 'center-bottom',
                rtl: true,
            });
    }
    else {
        $("#zipcode").addClass("is-valid").removeClass("is-invalid");
    }
}