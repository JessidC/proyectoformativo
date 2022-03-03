<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    protected $table='producto';

    protected $fillable = [
        'id_subcategoria',
        'nombre_producto',
        'valor_actual',
        'cantidad_existente',
        'descripcion_producto',
        'imagen_producto',
        'marcas_id_marcas',
        'descuento',
        'garantia',
        'users_id'
    ];


    
    public $timestamps = false;

    protected $primaryKey = 'id_producto';


}
