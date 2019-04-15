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
                            <img src="images/bg3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        </li>
                        <li data-index="rs-3046" data-transition="parallaxtoleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="images/bg4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
            </div><!-- END REVOLUTION SLIDER -->
        </section>

@endsection

        <div class="text-center">
        
            <h3 class="font300 mb20  h2">Regístro al <span class="text-primary">evento</span></h3>

            @if ($errors->any())
                <div class="alert alert-danger row div-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{route('registrar_escolta')}}" method="post">
                {{ csrf_field() }} 

                <p class="lead">Delegación</p>
                <div class="row">
                    <div class="col-sm-2 form-group">      
                        <label for="delegacion">INGRESA DELEGACION</label>          
                        <input id="delegacion" type="text" name="delegacion" class="form-control gui-input" style='text-transform:uppercase;' placeholder="*" value="{{ old('delegacion')}}" >
                        <small>Ejemplo: D-I-1</small>
                    </div>
                    <div class="col-sm-5 form-group">      
                        <label for="nivel">NIVEL EDUCATIVO</label>    
                        <select name="nivel" id="nivel"  class="form-control">
                            <option value=""></option>
                            <option value="PRIMARIA">PRIMARIA</option>
                            <option value="PREESCOLAR">PREESCOLAR</option>
                            <option value="NIVELES">NIVELES</option> ESPECIALES
                            <option value="SECUNDARIA">SECUNDARIA</option>
                            <option value="TELESECUNDARIA">TELESECUNDARIA</option>
                            <option value="BACHILLERATO">BACHILLERATO</option>
                            <option value="TELEBACHILLERATO">TELEBACHILLERATO</option>
                            <option value="UPV">UPV</option>
                            <option value="NORMALES">NORMALES</option>
                            <option value="ADMINISTRATIVOS">ADMINISTRATIVOS</option>
                            <option value="EDUCACIÓN">EDUCACIÓN</option> FÍSICA
                            <option value="JUBILADOS">JUBILADOS</option>
                        </select>                              
                    </div>
                    <div class="col-sm-5 form-group">      
                        <label for="sede">INGRESA SEDE DE LA DELEGACIÓN</label>          
                        <input id="sede" type="text" name="sede" class="form-control gui-input" style='text-transform:uppercase;' placeholder="*" value="{{ old('sede')}}" >
                    </div>
                </div> <hr>



                @foreach (range(0,7) as $x)
                    <div class="row">
                        <div class="col-sm-3 form-group">      
                            <label for="participante">PARTICIPANTE</label>    
                            <select name="participantes[]" id="participante-{{$x}}"  class="form-control">
                                <option value=""></option>
                                <option value="REPRESENTANTE">REPRESENTANTE</option>
                                <option value="SUPLENTE">SUPLENTE</option>
                                <option value="INTEGRANTE 1">INTEGRANTE 1</option> ESPECIALES
                                <option value="INTEGRANTE 2">INTEGRANTE 2</option>
                                <option value="INTEGRANTE 3">INTEGRANTE 3</option>
                                <option value="INTEGRANTE 4">INTEGRANTE 4</option>
                                <option value="INTEGRANTE 5">INTEGRANTE 5</option>
                                <option value="INTEGRANTE 6">INTEGRANTE 6</option>
                            </select> 
                        </div>

                        <div class="col-sm-3 form-group">      
                            <label for="nombre">INGRESA TÚ NOMBRE</label>          
                            <input id="nombre-{{$x}}" type="text" name="nombres[]" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('nombre')}}" >
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="apellido_paterno">PRIMER APELLIDO</label>          
                            <input id="apellido_paterno-{{$x}}" type="text" name="apellidos_paterno[]" class="form-control gui-input " style='text-transform:uppercase' value="{{ old('apellido_paterno')}}">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="apellido_materno">SEGUNDO APELLIDO</label>          
                            <input id="apellido_materno-{{$x}}" type="text" name="apellidos_materno[]" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('apellido_materno')}}" >
                        </div>
                    </div>     <hr>
                @endforeach      
                




                <hr>                


                <div class="row ">
                    <div class="col-xs-12 col-sm-12  form-group pt20">
                        <center><button type="submit" data-btntext-sending="Sending..." class="button btn btn-primary">Regístrate</button></center>
                    </div>
                </div>
            </form>
        </div>

<hr>

@stop
