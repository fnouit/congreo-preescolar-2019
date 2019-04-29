@extends('layout.app')
@section('titulo','Registro')
@section('container')
        
    <div class="container pt90 pb60">
        <div id="buscar" class="row align-items-center">
            <div class="col-md-5 mb30">
                <img src="{{asset('images/about.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1 mb30">
                <h3 class="font300 mb20 h2">Verifica si ya te has  <span class="text-primary">registrado</span></h3>

                <p>
                    Si ya te regístrate y deseas verificar tu información por favor ingresa tu Número de personal.
                </p><br>
                <form action="{{route('buscar')}}" method="get">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="tel" name="np" class="form-control form-control-lg mb20" placeholder="Ingresa tu Número de Personal">
                        </div>
                        <div class="col-md-6">
                            <span><small>Mostramos solo la información solicitada</small></span>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-outline-secondary btn-block">Buscar</button>
                        </div>
                    </div>
                </form>
            </div><!--/div-->
        </div>
    </div>

@stop        