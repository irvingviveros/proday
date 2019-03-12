<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Promos Veracruz - Boca del Río</title>
    <meta name="google-site-verification" content="GA7Ejd9MYKlVcevX6Qdwed_Va7L1Y6mvYHPQoHplc-M" />
    <!-- SLICK (CAROUSEL)-->
    <link rel="stylesheet" href="{{url('/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/slick/slick-theme.css')}}"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/styles.css')}}">
    <link rel="icon" href="/images/favicon/favicon16.ico" sizes="16x16">
    <link rel="icon" href="/images/favicon/favicon32.ico" sizes="32x32">
    <link rel="icon" href="/images/favicon/favicon96.ico" sizes="96x96">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132733118-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132733118-1');
    </script> TODO: Descomentar esto-->

</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span style="color: white;">
        <i class="fa fa-bars"></i>
      </span>
        </button>
        <a class="navbar-brand" href="/"> <img src="/images/logo/logoWhite.png" alt="Descuentappzo logo" height="32" width="32"></a>
        <div class=""></div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Promociones por día
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dia/lunes">Lunes</a>
                        <a class="dropdown-item" href="/dia/martes">Martes</a>
                        <a class="dropdown-item" href="/dia/miercoles">Miércoles</a>
                        <a class="dropdown-item" href="/dia/jueves">Jueves</a>
                        <a class="dropdown-item" href="/dia/viernes">Viernes</a>
                        <a class="dropdown-item" href="/dia/sabado">Sábado</a>
                        <a class="dropdown-item" href="/dia/domingo">Domingo</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="birthday.php">Promociones cumpleañeros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('proday/create')}}">Agregar promoción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('nuevoest/create')}}">Agregar establecimiento</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
