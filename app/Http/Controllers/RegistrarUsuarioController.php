<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Region;
use App\Taller;

class RegistrarUsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('congreso-preescolar.index');
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::all();
        $talleres = Taller::all();

        return view ('congreso-preescolar.registro')->with(compact('regiones','talleres'));
    }

/*     public function taller()
    {
        $talleres = Taller::all();
        return view ('congreso-preescolar.seleccion_taller')->with(compact('talleres'));
    } */


    public function talleres()
    {
        $talleres = Taller::all();
        return view ('congreso-preescolar.talleres')->with(compact('talleres'));
    }

    public function verificacion()
    {
        return view ('congreso-preescolar.verificacion');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // $registros = Usuario::where('taller_id',$request->seleccion_taller)->count();

        // return $registros;
        // return "aquí se almacena la información";
        $mensaje = [
            'nombre.required' => 'Es necesario ingresar un nombre para el registro',
            'apellido_paterno.required'=>'Es necesario ingresar al menos un apellido',
            'correo.required'=>'Hace falta tu correo electrónico ',
            'correo.unique'=>'El correo electrónico que proporciono ya ha sido registrado',
            'rfc.required'=>'Su RFC es necesario',
            'numero_personal.required'=>'Su número personal es necesario para el registro',
            // 'delegacion.required'=>'Es necesario saber a qué delegación perteneces ',
            'numero_personal.unique'=>'El numero personal ya ha sido registrado',
            'seleccion_taller.required' => 'Es necesario que selecciones un taller',
        ];
        $reglas = [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'correo' => 'required|unique:usuarios,correo',            
            'rfc' => 'required',
            'numero_personal'  => 'required|unique:usuarios,num_personal',
            'seleccion_taller' => 'required',
            // 'delegacion' => 'required'             
        ];

        /* 'correo' => 'required|email|unique:users', */



        $this->validate( $request, $reglas, $mensaje );

        
        $usuario = new Usuario();
        $usuario->nombre = strtoupper($request->nombre);
        $usuario->apellido_p = strtoupper($request->apellido_paterno);
        $usuario->apellido_m = strtoupper($request->apellido_materno);
        $usuario->correo = $request->correo;
        $usuario->rfc = strtoupper($request->rfc);
        $usuario->genero = strtoupper($request->genero);
        $usuario->telefono = $request->telefono;
        $usuario->facebook = "/".$request->facebook;
        $usuario->twitter = "@".$request->twitter;
        $usuario->num_personal = $request->numero_personal;
        $usuario->delegacion = strtoupper($request->delegacion);
        $usuario->zona_e = strtoupper($request->zona_escolar);
        $usuario->clave_ct = strtoupper($request->ct);
        $usuario->codigo_confirmacion = strtoupper(str_random(8));
        $usuario->agremiado = strtoupper($request->radio);
        $usuario->delegacion2 = strtoupper($request->delegacion2);
        $usuario->taller_id = $request->seleccion_taller;

        // $usuario->nombre = strtoupper($request->nombre);
        // dd($usuario);

        $usuario->save();  


        return view('confirmacion_registro')->with(compact('usuario'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('confirmacion_registro');
    }

    public function buscar(Request $request)
    {
        $num_personal = $request->get('np');      
        $usuario = Usuario::busqueda($num_personal)->get();
        return view ('busqueda')->with(compact('usuario'));
    }

    public function privacidad()
    {
        return view('privacidad');
    }

}
