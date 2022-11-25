<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class detalle extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'detalle';
    protected $fillable = [

    ];

    public function producto(){
        return $this->belongsTo('App\Models\producto');
    }
    public function venta(){
        return $this->belongsTo('App\Models\venta');
    }
}
