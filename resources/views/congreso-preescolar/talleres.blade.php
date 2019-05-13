@extends('layout.app')
@section('titulo','Mostrar talleres')
@section('container')

    <div class="container pt20 pb60">
        <h3 class="font300 mb20  h2" align="center"><strong><span class="text-primary">Talleres</span></strong></h3>
        <div class="row">
            @foreach($talleres as $key => $taller) 
                @if ( $taller != $loop->last )
                    <div class="col-md-4 mb30">
                        <div class="pricing-card">               
                            <div class="row gallery-row">                    
                                <a href="../images/talleres/{{$taller->imagen_taller}}" class="gallery-item">
                                    <img src="../images/talleres/{{$taller->imagen_taller}}" alt="" class="img-fluid">
                                </a>                    
                            </div>
                            <h6 class="pt20 mb10">
                                
                                <span style="color:#FFA500; font-size: 0.8rem;" class="float-right text-primary">
                                    Total de Registros <strong>{{$registros = App\Usuario::where('taller_id',$taller->id)->count()}}</strong>  / de {{$taller->limite}}
                                </span>    
                            </h6>
                            <h6 class="pt20 ">{{$taller->titulo}}</h6>
                            <p  style="text-transform: uppercase;">{{$taller->ponente}} </p>                              
                        </div>
                    </div>
                @endif                    
            @endforeach
        </div>
    </div>
@stop