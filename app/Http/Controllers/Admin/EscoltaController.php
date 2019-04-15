<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Escolta;

class EscoltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('registro_escolta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Escolta();

        $registro->delegacion=strtoupper($request->delegacion);
        $registro->nivel=strtoupper($request->nivel);
        $registro->sede=strtoupper($request->sede);
    
        $registro->rp_n=strtoupper($request->rp_n);
        $registro->rp_ap=strtoupper($request->rp_ap);
        $registro->rp_am=strtoupper($request->rp_am);
    
        $registro->sp_n=strtoupper($request->sp_n);
        $registro->sp_ap=strtoupper($request->sp_ap);
        $registro->sp_am=strtoupper($request->sp_am);
    
        $registro->in1_n=strtoupper($request->in1_n);
        $registro->in1_ap=strtoupper($request->in1_ap);
        $registro->in1_am=strtoupper($request->in1_am);
    
        $registro->in2_n=strtoupper($request->in2_n);
        $registro->in2_ap=strtoupper($request->in2_ap);
        $registro->in2_am=strtoupper($request->in2_am);
    
        $registro->in3_n=strtoupper($request->in3_n);
        $registro->in3_ap=strtoupper($request->in3_ap);
        $registro->in3_am=strtoupper($request->in3_am);
    
        $registro->in4_n=strtoupper($request->in4_n);
        $registro->in4_ap=strtoupper($request->in4_ap);
        $registro->in4_am=strtoupper($request->in4_am);
    
        $registro->in5_n=strtoupper($request->in5_n);
        $registro->in5_ap=strtoupper($request->in5_ap);
        $registro->in5_am=strtoupper($request->in5_am);
    
        $registro->in6_n=strtoupper($request->in6_n);
        $registro->in6_ap=strtoupper($request->in6_ap);
        $registro->in6_am=strtoupper($request->in6_am);

        // dd($registro);
        $registro->save();
        
        return view('confirmacion_registro_escolta')->with(compact('registro'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
