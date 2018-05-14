<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ URL::asset("js/jquery-1.11.1.min.js") }}"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link href="{{ URL::asset('css/navbar.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    @yield('estilos')
    <title>@yield('tittle')</title>
    
</head>
@header('header')
    <nav class="navbar navbar-findcond navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Know Poeta</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav margin-right">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li class=""><a href="{{ action('cursoController@curso')}}">Listado de cursos<span class="sr-only">(current)</span></a></li>
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listado de cursos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Base de datos</a></li>
                            <li><a href="#">FrondEnd</a></li>
                            <!--<li class="divider"></li>
                            <li><a href="#">BackEnd</a></li>
                            <li><a href="#exit">Diseño</a></li>
                        </ul>
                    </li>-->
                <li class=""><a href="#">Quienes Somos<span class="sr-only">(current)</span></a></li>
                <form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Search" />
			</form>
                </ul>
                <div class="flex-cont">
                    <ul class="nav navbar-nav">
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Inicio de session<span class="sr-only">(current)</span></a></li>
                        <li class="flex-ini"><a href="#">Registro<span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@show

<main class="main">
    @yield('content')
</main>

@section('footer')
<footer>
    <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> KNOW POETA</a>, Todos los derechos reservados 2018.</p>
</footer>
@show
</html>
