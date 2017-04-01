<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrf-token" name="X-CSRF-TOKEN" content="{{csrf_token()}}">

    <title>{{config('app.name')}}</title>

    {{--Styles--}}
    <link rel="stylesheet" href="{{asset('vendor/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{mix('css/admin.style.css')}}">
</head>

<body>
    <div id="app"></div>
    <script src="{{mix('js/main.admin.js')}}"></script>
</body>
</html>
