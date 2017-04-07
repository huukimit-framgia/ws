<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrf-token" name="X-CSRF-TOKEN" content="{{csrf_token()}}">

    <title>{{config('app.name')}}</title>

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"/>
    <link rel="stylesheet" href="{{mix('css/admin/admin.style.css')}}">
</head>

<body>
<div id="app"></div>
<script src="{{mix('js/admin/main.admin.js')}}"></script>
<script>
    $(document).ready(() => {
        $("a.mobile").click(() => {
            $(".sidebar").slideToggle('fast');
        });

        window.onresize = () =>  {
            if ($(window).width() > 480) {
                $(".sidebar").show();
            }
        };
    });
</script>
</body>
</html>
