<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Maintenence HTML Template | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{asset('template/src/assets/img/favicon.ico')}}"/>
    <link href="{{asset('template/layouts/horizontal-light-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/layouts/horizontal-light-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('template/layouts/horizontal-light-menu/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('template/src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/layouts/horizontal-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/src/assets/css/light/pages/error/style-maintanence.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('template/layouts/horizontal-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/src/assets/css/dark/pages/error/style-maintanence.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        body.dark .theme-logo.dark-element {
            display: inline-block;
        }
        .theme-logo.dark-element {
            display: none;
        }
        body.dark .theme-logo.light-element {
            display: none;
        }
        .theme-logo.light-element {
            display: inline-block;
        }
    </style>

</head>
<body class="maintanence text-center">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <a href="./index.html">
                    <img alt="logo" src="{{asset('template/src/assets/img/logo.svg')}}" class="dark-element theme-logo">
                    <img alt="logo" src="{{asset('template/src/assets/img/logo2.svg')}}" class="light-element theme-logo">
                </a>
            </div>
            <h1 class="error-title">Bonsoir Tout le Monde</h1>
            <p class="error-text">Voici les etudiants inscrit.</p>
          @foreach ($etudiants as $etudiant )
              
            <p class="text">  {{$etudiant->prenom}} {{$etudiant->nom}} {{$etudiant->date}} <a href="{{url("/delete/$etudiant->id")}}"><b>supprimer</b> </a> </p> 
        @endforeach
            <a href="{{url('/')}}" class="btn btn-dark mt-4">Home</a>
        </div>
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('template/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>