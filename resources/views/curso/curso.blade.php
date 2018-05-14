@extends('templates.cabecera')

{{-- Agregar CSS --}}
@section('estilos')
<link rel="stylesheet" href="{{ URL::asset('css/curso.css') }}" type="text/css">
@stop

@section('content')
<br>
<h1 class="text-center">Lista de cursos</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group input-append">
                    <input type="text" class="form-control"  placeholder="Buscar curso" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>

<section>
<div class="contenedor-card">
        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>HTML5, CSS3, JavaScript para Principiantes</h4>
                <p>Carlos Mendoza</p>
                <p>Programacion</p>
                <p>48 HORAS</p>
                <p class="precio">S/. 200</p>
                <a href="#" class="button button-primary comprar full-btn" data-toggle="modal" data-target="#curso">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion avanzada</h4>
                <p>Carlos Mendoza</p>
                <p>Programacion</p>
                <p>48 HORAS</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn" data-toggle="modal" data-target="#curso">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion basica</h4>
                <p>Carlos Mendoza</p>
                <p>Programacion</p>
                <p>48 HORAS</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn" data-toggle="modal" data-target="#curso">Comprar curso</a>
            </div>
        </div>

        <div class="card-cont">
            <div class="cont-img">
                <img class="img-responsive" src="{{ URL::asset('img-cursos/curso1.jpg')}}" alt="">
            </div>
            <div class="informacion">
                <h4>Curso de programacion intermedia</h4>
                <p>Carlos Mendoza</p>
                <p>Programacion</p>
                <p>48 HORAS</p>
                <p class="precio">S/. 400</p>
                <a href="#" class="button button-primary comprar full-btn" data-toggle="modal" data-target="#curso">Comprar curso</a>
            </div>
        </div>
    </div>
</section>

<div id="curso" class="modal fade" role="dialog">
<div class="center-modal">
    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Desea comprar este curso</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="center-log">
                                        <a href="javascript:;" class="btn btn-sm red-bot col-md-4">Comprar</a>
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