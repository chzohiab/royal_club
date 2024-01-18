<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-Light.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-Medium.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-Regular.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-SemiBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-Bold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/nunito/Nunito-ExtraBold.ttf') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
</head>

<body>
    <div class="rc-main">
        <div class="rc-content">
            @yield('authcontent')
        </div>
    </div>
    
</body>

</html>