<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Camiseta extends Model
{
    protected $table = "camisetas";
    protected $primary_key = "id_camiseta";
    public $timestamps = false;

    protected $fillable = ["nombre_producto", "precio_producto", "imagen_producto"];

    public function talles(): HasManyThrough
    {
        return $this->hasManyThrough(Talle::class, Producto::class, "camiseta_id", "talle_id");
    }
}
