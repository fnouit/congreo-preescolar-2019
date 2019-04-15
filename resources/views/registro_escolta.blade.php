@extends('layout.app')
@section('titulo','Registro')
@section('container')

<div class="text-justify">

    <h3 class="font300 mb50  h2" align="center">Regístro a la CONVOCATORIA <br><span class="text-primary">"DEMOSTRACIÓN DE ESCOLTAS MAGISTERIALES"</span></h3>

    @if ($errors->any())
        <div class="alert alert-danger row div-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="box">     
        <form action="{{route('registrar_escolta')}}" method="post" id="registro_form"> 
        {{ csrf_field() }}           
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active active_tab1" data-toggle="tab" href="#" id="list_detalle_delegacion">DELEGACIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_detalle_representante">REPRESENTANTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_detalle_suplente">SUPLENTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_detalle_integrantes01">INTEGRANTES 1 AL 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_detalle_integrantes02">INTEGRANTES 4 AL 6</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" >
                <div id="detalle_delegacion" class="container tab-pane active"><br>
                    <h3>DELEGACIÓN</h3>
                    <div class="row">
                        <div class="col-md-11 form-group">      
                            <label for="delegacion">INGRESA DELEGACIÓN</label>          
                            <input id="delegacion" type="text" name="delegacion" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('delegacion')}}" >
                            <small>Ejemplo: D-I-1</small> <br> <span id="error_delegacion" class="text-danger"></span>
                        </div> 
                        <div class="col-md-11 form-group">      
                            <label for="nivel">NIVEL EDUCATIVO</label>    
                            <select name="nivel" id="nivel"  class="form-control">
                                <option value=""></option>
                                <option value="PRIMARIA">PRIMARIA</option>
                                <option value="PREESCOLAR">PREESCOLAR</option>
                                <option value="NIVELES">NIVELES ESPECIALES</option> 
                                <option value="SECUNDARIA">SECUNDARIA</option>
                                <option value="TELESECUNDARIA">TELESECUNDARIA</option>
                                <option value="BACHILLERATO">BACHILLERATO</option>
                                <option value="TELEBACHILLERATO">TELEBACHILLERATO</option>
                                <option value="UPV">UPV</option>
                                <option value="NORMALES">NORMALES</option>
                                <option value="ADMINISTRATIVOS">ADMINISTRATIVOS</option>
                                <option value="EDUCACIÓN">EDUCACIÓN FÍSICA</option> 
                                <option value="JUBILADOS">JUBILADOS</option>
                            </select>
                            <span id="error_nivel" class="text-danger"></span>                              
                        </div>
                        <div class="col-md-11 form-group">      
                            <label for="sede">INGRESA SEDE</label>          
                            <input id="sede" type="text" name="sede" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('sede')}}" >
                            <span id="error_sede" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-xs-12 col-sm-12  form-group pt10">
                            <button type="button" name="btn_delegacion" id="btn_delegacion" class="button btn btn-info">Siguiente</button>
                        </div>
                    </div>                            

                </div> <!-- fin div detalle_delegacion -->

                <div id="detalle_representante" class="container tab-pane fade"><br>
                    <h3>REPRESENTANTE</h3>
                    <div class="row">
                        <div class="col-md-11 form-group">      
                            <label for="rp_n">INGRESA TÚ NOMBRE</label>          
                            <input id="rp_n" type="text" name="rp_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('rp_n')}}" required>
                            <span id="error_rp_n" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="rp_ap">PRIMER APELLIDO</label>          
                            <input id="rp_ap" type="text" name="rp_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('rp_ap')}}" required>
                            <span id="error_rp_ap" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="rp_am">SEGUNDO APELLIDO</label>          
                            <input id="rp_am" type="text" name="rp_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('rp_am')}}">                            
                        </div>
                    </div>            
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12  form-group pt10">
                            <button type="button" name="anterior_btn_delegacion" id="anterior_btn_delegacion" class="button btn btn-default" style="margin-right: 25px;">Anterior</button>
                            <button type="button" name="btn_representante" id="btn_representante" class="button btn btn-info">Siguiente</button>
        
                        </div>
                    </div>
                </div><!-- fin div detalle_representante -->

                <div id="detalle_suplente" class="container tab-pane fade"><br>
                    <h3>SUPLENTE</h3>
                    <div class="row">
                        <div class="col-md-11 form-group">      
                            <label for="sp_n">INGRESA TÚ NOMBRE</label>          
                            <input id="sp_n" type="text" name="sp_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('sp_n')}}" required>
                            <span id="error_sp_n" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="sp_ap">PRIMER APELLIDO</label>          
                            <input id="sp_ap" type="text" name="sp_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('sp_ap')}}" required>
                            <span id="error_sp_ap" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="sp_am">SEGUNDO APELLIDO</label>          
                            <input id="sp_am" type="text" name="sp_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('sp_am')}}">                            
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12  form-group pt10">
                            <button type="button" name="anterior_btn_representante" id="anterior_btn_representante" class="button btn btn-default" style="margin-right: 25px;">Anterior</button>
                            <button type="button" name="btn_suplente" id="btn_suplente" class="button btn btn-info">Siguiente</button>        
                        </div>
                    </div>
                </div><!-- fin div detalle_suplente -->

                <div id="detalle_integrantes01" class="container tab-pane fade"><br>
                    <div class="row">
                        <h6>INTEGRANTE 1</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in1_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in1_n" type="text" name="in1_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in1_n')}}" required>
                            <span id="error_in1_n" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in1_ap">PRIMER APELLIDO</label>          
                            <input id="in1_ap" type="text" name="in1_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in1_ap')}}" required>
                            <span id="error_in1_ap" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in1_am">SEGUNDO APELLIDO</label>          
                            <input id="in1_am" type="text" name="in1_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in1_am')}}">
                        </div>
                    </div>            
    
    
                    <div class="row">
                        <h6>INTEGRANTE 2</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in2_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in2_n" type="text" name="in2_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in2_n')}}" required>
                            <span id="error_in2_n" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in2_ap">PRIMER APELLIDO</label>          
                            <input id="in2_ap" type="text" name="in2_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in2_ap')}}" required>
                            <span id="error_in2_ap" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in2_am">SEGUNDO APELLIDO</label>          
                            <input id="in2_am" type="text" name="in2_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in2_am')}}">
                        </div>
                    </div>            
    
                    <div class="row">
                        <h6>INTEGRANTE 3</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in3_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in3_n" type="text" name="in3_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in3_n')}}" required>
                            <span id="error_in3_n" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in3_ap">PRIMER APELLIDO</label>          
                            <input id="in3_ap" type="text" name="in3_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in3_ap')}}" required>
                            <span id="error_in3_ap" class="text-danger"></span>
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in3_am">SEGUNDO APELLIDO</label>          
                            <input id="in3_am" type="text" name="in3_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in3_am')}}">
                        </div>
                    </div> 

                    <div class="row ">
                        <div class="col-xs-12 col-sm-12  form-group pt10">
                            <button type="button" name="anterior_btn_suplente" id="anterior_btn_suplente" class="button btn btn-default" style="margin-right: 25px;">Anterior</button>  
                            <button type="button" name="btn_integrantes01" id="btn_integrantes01" class="button btn btn-info">Siguiente</button>    
                        </div>
                    </div>
                </div><!-- fin div detalle_integrantes01 -->

                <div id="detalle_integrantes02" class="container tab-pane fade"><br>
                    <div class="row">
                        <h6>INTEGRANTE 4</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in4_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in4_n" type="text" name="in4_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in4_n')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in4_ap">PRIMER APELLIDO</label>          
                            <input id="in4_ap" type="text" name="in4_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in4_ap')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in4_am">SEGUNDO APELLIDO</label>          
                            <input id="in4_am" type="text" name="in4_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in4_am')}}">
                        </div>
                    </div>            
    
    
                    <div class="row">
                        <h6>INTEGRANTE 5</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in5_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in5_n" type="text" name="in5_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in5_n')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in5_ap">PRIMER APELLIDO</label>          
                            <input id="in5_ap" type="text" name="in5_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in5_ap')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in5_am">SEGUNDO APELLIDO</label>          
                            <input id="in5_am" type="text" name="in5_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in5_am')}}">
                        </div>
                    </div>            
    
                    <div class="row">
                        <h6>INTEGRANTE 6</h6>
                        <div class="col-md-11 form-group">      
                            <label for="in6_n">INGRESA TÚ NOMBRE</label>          
                            <input id="in6_n" type="text" name="in6_n" class="form-control gui-input" style='text-transform:uppercase;' value="{{ old('in6_n')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in6_ap">PRIMER APELLIDO</label>          
                            <input id="in6_ap" type="text" name="in6_ap" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in6_ap')}}">
                        </div>
                        <div class="col-md-11 form-group">
                            <label for="in6_am">SEGUNDO APELLIDO</label>          
                            <input id="in6_am" type="text" name="in6_am" class="form-control gui-input" style='text-transform:uppercase' value="{{ old('in6_am')}}">
                        </div>
                    </div>  


                    <div class="row ">
                        <div class="col-xs-12 col-sm-12  form-group pt10">
                            <button type="button" name="anterior_btn_integrantes01" id="anterior_btn_integrantes01" class="button btn btn-default" style="margin-right: 25px;">Anterior</button>
                            <button type="button" name="btn_guardar" id="btn_guardar" class="button btn btn-success">REGISTRAR</button>    
                        </div>
                    </div>
                </div><!-- fin div detalle_integrantes02 -->
            </div>
        </form>
    </div>

</div>

<hr>

@stop


@section('script')

<script type="text/javascript" src="{{ asset('js/form_panel.js')}}"></script> 

@stop