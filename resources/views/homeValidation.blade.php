<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بررسی اسکان</title>
    <link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">

</head>

<body style="font-family: Shabnam, Tahoma;">
    <div align="center">
        <p>جمعیت خدمتگزاران به زائرین حضرت رضا (ع)</p>
        @if($Status == 'success')
        <p style="margin-top: 20px; padding-top: 50px; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
            </svg>
        </p>

        <p dir="rtl">
                زائر محترم، 
                {{ $pilgrimName }}
                به اسکان<br/>
                {{ $homeName }}
                تعلق دارد.
        </p>
        @elseif ($Status == 'error')

        <p style="margin-top: 20px; padding-top: 50px; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </p>

        <p>
            زائر به این اسکان تعلق ندارد
        </p>
        @endif
        

    </div>
</body>

</html>