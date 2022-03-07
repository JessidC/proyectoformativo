<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model


{
    use HasFactory;
    protected $table='subcategoria';

    protected $fillable = [
        'id_categoria',
        'nombre_subcategoria',
        'estado',
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_subcategoria';

}