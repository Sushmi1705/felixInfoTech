<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felix Infotech</title>

    <link rel="shortcut icon" href="/img/logo/fav-logo1.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body_attribute')>

    @include('layouts.partials.loader')
    @include('layouts.partials.header.navbar')

    @yield('content')

    @include('layouts.partials.cta')
    @include('layouts.partials.footer')

    @yield('scripts')

    @vite(['resources/js/main.js'])

</body>

</html>