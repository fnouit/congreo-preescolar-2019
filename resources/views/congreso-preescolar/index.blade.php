@extends('layout.app')
@section('titulo','Registro')
@section('container')


@section('banner')

        <section id="home">
            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>	
                        <li data-index="rs-3045" data-transition="parallaxtoleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="{{asset('images/bg5.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
            </div><!-- END REVOLUTION SLIDER -->
        </section>

@endsection

        <div class="container pb30">
            <div class="row pb80">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <h2 class="font300 h1">
                        Congreso <span class="text-primary">Preescolar 2019</span> 
                    </h2>
                    <p class="lead">
                        📙📚 “DESAFÍOS ACTUALES Y EL PAPEL DOCENTE EN EL NUEVO MODELO EDUCATIVO”
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb30">
                    <a href="{{route('registro')}}">
                        <img src="{{asset('images/img1.jpg')}}" alt="" class="img-fluid mb20">
                        <h4>Registro al Congreso</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penculus mus.
                    </p>
                </div>
                <div class="col-md-4 mb30">
                    <a href="{{route('talleres')}}">
                        <img src="{{asset('images/img5.jpg')}}" alt="" class="img-fluid mb20">
                        <h4>¿Cuales son los Talleres?</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penculus mus.
                    </p>
                </div>
                <div class="col-md-4 mb30">
                    <a href="{{route('verificacion')}}">
                        <img src="{{asset('images/img4.jpg')}}" alt="" class="img-fluid mb20">
                        <h4>Verifica tu registro</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penculus mus.
                    </p>
                </div>
            </div>
        </div>

    @section('banner2')
        <a href="{{route('registro')}}" class="btn btn-block btn-primary pt40 pb40 btn-lg">Regístrate antes del 25 de mayo y participa con nosotros en esta gran experiencia.</a>        
    @endsection

@stop