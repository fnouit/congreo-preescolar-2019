@extends('layout.app')
@section('titulo','Confirmación')
@section('container')

@section('banner')
        <div class="dzsparallaxer auto-init height-is-based-on-content "  data-options='{   direction: "reverse"}'>
            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 130%; background-image: url(images/bg2.jpg)">
            </div>
            <div class="semi-black-overlay"></div>
            <div class="container pt100 pb100">
                <div class="row">
                    <div class="col-md-8 mr-auto ml-auto">
                        <h3 class="h1 text-center font300 text-white">Confirmación</h3>
                    </div>
                </div>
            </div>
            <div class="dzsprxseparator--2triangles"></div>
        </div><!--parallax-->
@endsection

        <div class="container pt0 pb60">
            <div class="row mb50">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <h2 class="mb20 font300">Apreciable <span style="text-transform:uppercase;">{{$registro->rp_n}}</span></h2>
                    <p class="lead">
                        Gracias por registrarte a la <br> CONVOCATORIA <br>
                        <strong>"DEMOSTRACIÓN DE ESCOLTAS MAGISTERIALES"</strong> 
                                               
                    </p>
                    <a href=" {{ route('inicio') }} " style="margin-top:35px;box-sizing:border-box;border-radius:3px;color:#fff;display:inline-block;text-decoration:none;background-color:#ed8407;border-top:10px solid #ed8407;border-right:18px solid #ed8407;border-bottom:10px solid #ed8407;border-left:18px solid #ed8407">
                        Terminar proceso de registro
                    </a>                    
                </div>
            </div><hr class="mb80">

            <div class="row">
                <div class="col-md-6">
                    <h3>Reglamento de Escoltas</h3>
                    <a class="btn btn-default" href="{{ asset('file/REGLAMENTO_ESCOLTA.pdf')}}" target="_blank" role="button">  
                        <img src="{{asset('images/escolta.jpg')}}" class="img-thumbnail mb10" alt="...">
                    </a> <br>
                </div>
                <div class="col-md-6">
                    <h3>Recorrido de Escoltas</h3>
                    <a class="btn btn-default" href="{{ asset('file/RECORRIDO_ESCOLTA.pdf')}}" target="_blank" role="button">  
                        <img src="{{asset('images/recorrido.jpg')}}" class="img-thumbnail mb10" alt="...">
                    </a> <br>
                </div>
            </div>
                        
        </div>

@stop