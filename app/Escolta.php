<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolta extends Model
{

    protected $fillable = [
        'delegacion',
        'nivel',
        'sede',
    
        'rp_n',
        'rp_ap',
        'rp_am',
    
        'sp_n',
        'sp_ap',
        'sp_am',
    
        'in1_n',
        'in1_ap',
        'in1_am',
    
        'in2_n',
        'in2_ap',
        'in2_am',
    
        'in3_n',
        'in3_ap',
        'in3_am',
    
        'in4_n',
        'in4_ap',
        'in4_am',
    
        'in5_n',
        'in5_ap',
        'in5_am',
    
        'in6_n',
        'in6_ap',
        'in6_am',
    ];      
}
