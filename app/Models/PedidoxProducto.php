<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_x_producto extends Model
{
    use HasFactory;
    protected $table='pedido_x_producto';

    protected $fillable = [
        'id_pedido',
        'id_producto',
        'cantidad',
        'valor_producto_venta',
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_pedido_x_producto';

}