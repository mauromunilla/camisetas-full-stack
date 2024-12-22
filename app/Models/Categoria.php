<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $primary_key = "id_categoria";
    public $timestamps = false;
    
    protected $fillable = ["nombre_categoria"];

    public function producto(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class, 'producto_id', 'id_producto');
    }
}
