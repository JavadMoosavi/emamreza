$("#sendform").click(function () {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "/loginc",
      data: {
        username: $('#username').val(),
        password: $('#password').val(),
        _token: $('_token').val(),
        captcha: $('#captchaField').val(),
        
      },
      beforeSend: function () {
        Notiflix.Loading.standard('لطفا کمی صبر کنید...');
      },
      success: function (data) {
        console.log(data); //remove on production mode!
      },
      complete: function () {
        Notiflix.Loading.remove();
      },
    });
  });
  