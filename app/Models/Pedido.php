<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table='pedidos';

    protected $fillable = [
        'id_direccion',
        'fecha_pedido',
        'valor_total_factura',
        'num_factura',
        'fecha_fact',
        'estado_a_i_id',
        'id_user',
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_pedidos';
}