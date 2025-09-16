<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felix Infotech</title>

    <!--=====FAB ICON=======-->
    @if(isset($logo2))
        <link rel="shortcut icon" href="/img/logo/fav-logo2.png" type="image/x-icon">
    @elseif (isset($logo3))
        <link rel="shortcut icon" href="/img/logo/fav-logo3.png" type="image/x-icon">
    @elseif (isset($logo4))
        <link rel="shortcut icon" href="/img/logo/fav-logo4.png" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="/img/logo/fav-logo1.png" type="image/x-icon">
    @endif

    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body_attribute')>

    @yield('header')

    @yield('content')


    @yield('scripts')

    @vite(['resources/js/main.js'])

</body>

</html>