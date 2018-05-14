@extends('templates.cabecera')

{{--Nombre de la interfaz--}}
@section('tittle','Know Poeta')

{{-- Agregar nuevos CSS al head --}}
@section('estilos')
<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
@stop

{{--Contenido--}}
@section('content')  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://via.placeholder.com/1320x440" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="http://via.placeholder.com/1320x440" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="http://via.placeholder.com/1320x440" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section>

      <h1 class="text-center">Cursos en linea</h1>

    <div class="contenedor-card">
        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                <p>Carlos Mendoza</p>
                <p class="precio">S/. 200</p>
                <a href="#" class="button button-primary comprar full-btn">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion avanzada</h4>
                <p>Carlos Mendoza</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion basica</h4>
                <p>Carlos Mendoza</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion intermedia</h4>
                <p>Carlos Mendoza</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn">Comprar curso</a>
            </div>
        </div>
    </div>
  </section>

{{-- MODAL LOGUEO --}}

<div id="myModal" class="modal fade" role="dialog">
<div class="center-modal">
    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Iniciar Session</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="center-log">
                                        <a href="javascript:;" class="btn btn-sm red-bot col-md-4">Login</a>
                                        <a href="javascript:;" class="btn btn-sm btn-default def-bot col-md-4">Cancelar</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
@stop