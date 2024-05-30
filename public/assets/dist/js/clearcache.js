$('#reload').click(function () {
  $.ajax({
    type: 'GET',
    url: 'reload_captcha',
    success: function (data) {
      $(".captchaSpan").html(data.captcha);
      $('#captchaField').val("");
    }
  });
});

// =============================================
$("#subbtn").click(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "/loginProccessor",
    data: {
      username: $('#username').val(),
      password: $('#password').val(),
      captcha: $('#captchaField').val(),
    },
    beforeSend: function() {
      Notiflix.Loading.standard('لطفا کمی صبر کنید...');
    },
    success: function (data) {
      if (data.errorCode == '1') {
        Notiflix.Report.failure(
          'خطا در ورود به سیستم',
          data.errorMsg,
          'تایید'
        );

          $('#username').val("");
          $('#password').val("");
          $('#captchaField').val("");

          $.ajax({
            type: 'GET',
            url: 'reload_captcha',
            success: function (data) {
              $(".captchaSpan").html(data.captcha);
              $('#captchaField').val("");
            }
          });    

      }
      else if (data.errorCode == '0')
      {
        Notiflix.Notify.success('ورود با موفقیت انجام شد، تا انتقال به صفحه صبر کنید');
        console.log(data.page);
        window.location.href = data.page;
      }
    },
    complete: function() {
      Notiflix.Loading.remove();
    }
  });
});


