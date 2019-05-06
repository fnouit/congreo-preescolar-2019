<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'genero',
        'correo',            
        'rfc',
        'telefono',
        'facebook',
        'twitter',
        'num_personal',
        'delegacion',
        'zona_e',
        'clave_ct',    
        'confirmado',
        'codigo_confirmacion'          
    ];  

    // Query Scope

    public function scopeBusqueda($query,$num_personal='')
    {
/*         if($num_personal)
            return $query->where('num_personal', $num_personal);
        elseif ($num_personal) {
            return "SIN REGISTRO";
        }
 */            
        return $query->where('num_personal', $num_personal);
    }
}
