@extends('layout.app')
@section('titulo','Registro')
@section('container')

    <h3 class="font300 mb20  h2" align="center">Regístro Congreso <span class="text-primary">Preescolar</span></h3>

    @if ($errors->any())
        <div class="alert alert-danger row div-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('enviar_registro') }}" method="post">
    {{ csrf_field() }} 

        <p class="lead">Selección de Taller</p>
        <div class="row">
            <div class="col-sm-12 form-group">      
                <label for="seleccion_taller">SELECCIONA DEL LISTADO QUE A CONTINUACION TE MOSTRAMOS AL QUE DESEAS ASISTIR.</label>
                <select id="seleccion_taller" name="seleccion_taller" class="form-control">                            
                    <option value="" selected disabled hidden>TALLERES DISPONIBLES</option>    
                    @foreach($talleres as $key => $taller)    
                        {{$registro = App\Usuario::where('taller_id',$taller->id)->count()}}
                        @if($registro < 3)
                            <option value="{{$taller->id}}" style="text-transform: uppercase;">Taller {{$key+1}} - {{$taller->titulo}}</option>
                        @endif
                    @endforeach                    
                </select>
                <span>Si el taller no se encuentra es por que ha superado el limite de registros. </span>
            </div>
        </div>                           

        <p class="lead">Datos Personales </p>
        <div class="row">
            <div class="col-sm-6 form-group">      
                <label for="nombre">INGRESA TÚ NOMBRE</label>          
                <input id="nombre" type="text" name="nombre" class="form-control gui-input" style='text-transform:uppercase;' placeholder="*" value="{{ old('nombre')}}" >
            </div>
            <div class="col-sm-3 form-group">
                <label for="apellido_paterno">PRIMER APELLIDO</label>          
                <input id="apellido_paterno" type="text" name="apellido_paterno" class="form-control gui-input " style='text-transform:uppercase' placeholder="*" value="{{ old('apellido_paterno')}}">
            </div>
            <div class="col-sm-3 form-group">
                <label for="apellido_materno">SEGUNDO APELLIDO</label>          
                <input id="apellido_materno" type="text" name="apellido_materno" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('apellido_materno')}}" >
            </div>
        </div>                           

        <div class="row">
            <div class="col-sm-5  form-group">
                <label for="apellido_materno">CORREO ELECTRÓNICO</label>          
                <input id="correo" type="email" name="correo" class="form-control" placeholder="*" value="{{old('correo')}}"  >
            </div>
            <div class="col-sm-5  form-group">
                <label for="rfc">INGRESA TÚ RFC</label>
                <input id="rfc" type="text" name="rfc" class="form-control" style='text-transform:uppercase' placeholder="*" value="{{old('rfc')}}" >
            </div>
            <div class="col-sm-2  form-group">
                <label for="genero">GENERO</label>          
                <select id="genero" name="genero" class="form-control">                            
                    <option></option>                    
                    <option value="OTRO">SIN ESPECIFICAR</option>                    
                    <option value="HOMBRE">HOMBRE</option>
                    <option value="MUJER">MUJER</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4  form-group">
                <label for="telefono">¿TÚ TELÉFONO ES?</label>
                <input id="telefono" type="tel" name="telefono" class="form-control" telefono value="{{old('telefono')}}">
            </div>
            <div class="col-sm-4  form-group">
                <label for="facebook">¿CUÁL ES TU FACEBOOK?</label>
                <input type="text" id="facebook" name="facebook" class="form-control" value="{{old('facebook')}}">       
            </div>
            <div class="col-sm-4  form-group">
                <label for="twitter">¿CUÁL ES TU TWITTER?</label>
                <input type="text" id="twitter" name="twitter" class="form-control" value="{{old('twitter')}}">
            </div>                      
        </div> <hr>


        <div class="clearfix pt20" ></div>
        <p class="lead">¿Eres agremiado a la Sección 56 del SNTE? </p>  

        <div class="row" align="left">
            <div class="col-md-12 form-group">
                <div class="form-check ">                    
                    <label class="form-check-label" for="check-radio1">
                        <input type="radio" class="form-check-input " id="check-radio1" name="radio" checked value="SI"> SOY AGREMIADO
                    </label>
                </div>
                <div class="form-check ">                    
                    <label class="form-check-label" for="check-radio2">
                        <input type="radio" class="form-check-input  " id="check-radio2" name="radio"  value="NO"> NO SOY AGREMIADO
                    </label>
                </div>                    
            </div>
        </div><hr>

        <!-- <div class="clearfix pt20" ></div> -->
        <p class="lead">Datos Laborales </p>  

        <div class="row">
            <div class="col-sm-6 form-group">
                <label for="region">¿A QUE REGIÓN PERTENECES?</label>
                <select class="custom-select form-control" name="region" id="region" >
                    <option disabled selected>SELECCIONA LA REGIÓN</option>
                    @foreach ($regiones as $key => $region)
                        <option value="{{$region->id}}">{{$key+1}} - {{$region->nombre}}&nbsp &nbsp{{$region->sede}}</option>
                    @endforeach
                </select>                 
            </div>
            <div class="col-sm-6 form-group">
                <label for="delegacion">¿CUÁL ES SU DELEGACIÓN?</label>
                <select class="custom-select form-control" name="delegacion" id="delegacion" >
                </select>                 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12 form-group ">
                <label for="delegacion_opcional">¿NO ENCUENTRAS TU DELEGACIÓN?</label>
                <span><small>Ingresa manualmente tu Delegación (opcional)</small></span>
                <input type="text" name="delegacion2" id="delegacion2" class="form-control" value="{{old('delegacion2')}}" style='text-transform:uppercase'>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group ">
                <label for="numero_personal">¿TÚ NÚMERO DE PERSONAL ES?</label>
                <input type="tel" placeholder="*" id="numero_personal" name="numero_personal" class="form-control" value="{{old('numero_personal')}}">
            </div>
            <div class="col-sm-4 form-group">
                <label for="zona_escolar">¿CÚAL ES TU ZONA ESCOLAR?</label>
                <input type="text" style='text-transform:uppercase' id="zona_escolar" name="zona_escolar" class="form-control" value="{{old('zona_escolar')}}">     
            </div>
            <div class="col-sm-4 form-group">
                <label for="ct">CLAVE DEL TÚ CENTRO DE TRABAJO</label>
                <input type="text" style='text-transform:uppercase' id="ct" name="ct" class="form-control" value="{{old('ct')}}">     
            </div>                               
        </div>

        <div class="row ">
            <div class="col-xs-12 col-sm-12  form-group pt20">
                <center><button type="submit" data-btntext-sending="Sending..." class="button btn btn-primary">Regístrate</button></center>
            </div>
        </div>
    </form>
@stop

@section('script')

<script type="text/javascript">
    $('#region').on('change', onSelectRegion);

    function onSelectRegion(){
        var region_id = $(this).val();
        $.get('/regiones/'+region_id+'/delegaciones', function(data){
            
            $('#delegacion').empty();

            $('#delegacion').append('<option disabled selected>SELECCIONA DELEGACIÓN</option>');
            for (var i = 0; i < data.length; ++i)
                $('#delegacion').append('<option value="'+ data[i].numero +'">' + data[i].numero + " - " +data[i].sede +'</option>');
        return;
        });
    }
</script>

@endsection