<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Bola Dunia Walet</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="PT. Bola Dunia Walet is one of the leading company producing Agar Powder in Indonesia’s food industry. Established in 1993, our initial purpose has always been to expand and improve the Agar-Agar industry in Indonesia.">
        <link rel="canonical" href="http://boladuniawalet.com" >
        <meta name="robots" content="index, follow" />
        <link rel="icon" href="{{ asset('img/logo/logo.png') }}" sizes="16x16" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/custom.css' )}}">
        <link rel="stylesheet" href="{{ asset('css/full-slider.css' )}}">


    </head>
    <body>
        <div id="app">
            @include('includes.navbar')
            @yield('content')
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @yield('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
</html>
