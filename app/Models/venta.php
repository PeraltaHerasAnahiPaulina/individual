<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class venta extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'ventas';
    protected $fillable = [
        'fecha',
        'subtotal',
        'total'
    ];

    public function detalles(){
        return $this->HasMany('App\Models\detalles');
    }
}
