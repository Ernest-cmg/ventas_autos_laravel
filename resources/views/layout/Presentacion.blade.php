<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/presentacion.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="contenedor">
        @yield('presentacion')
        <div class="contenedor_elemento">
            <b class="contenedor_elemento-texto">El mejor precio del mercado</b>
        </div>
    </div>
</body>
</html>
