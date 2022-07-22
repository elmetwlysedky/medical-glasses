<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'phone',
        'address',
        'frame_types_id',
        'frame_material',
        'lens_type',
        'lens_material',
        'r_spil',
        'r_cyl',
        'r_ax',
        'l_spil',
        'l_cyl',
        'l_ax',
        'i_p_d',
        'price',
        'paid_up',
        'remainder'
    ];


    public function frame_type(){
        return $this->belongsTo(FrameType::class, 'frame_types_id');
    }

}
