@extends('layout.app')
@section('titulo','Seleccion de Taller')
@section('container')
    <div class="container pt60 pb60">
        <div class="row align-items-center">
            <div class="col-md-5 mb30">
                <a href="{{route('mostrar_talleres')}}">
                    <img src="{{asset('images/mostrar_taller.png')}}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-6 offset-md-1 mb30">
                <h3 class="font300 mb20 h2">Selecciona tu <span class="text-primary">Taller</span></h3>

                <p>Selecciona del listado que a continuación te mostramos el <strong>TALLER</strong> al que deseas asistir.</p><br>
                <form action="{{route('registrarse')}}" method="post">
                    @csrf
                    <div class="row form-group">                        
                        <select id="seleccion_taller" name="seleccion_taller" class="form-control">                            
                            <option>Mostrar</option>     
                            @foreach($talleres as $key => $taller)               
                                <option value="{{$taller->id}}">Taller {{$key+1}} - {{$taller->titulo}}</option>
                            @endforeach                    
                        </select>
                        <div class="pt20">
                            <button type="submit" class="button btn btn-outline-secondary">Siguiente</button>            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@stop