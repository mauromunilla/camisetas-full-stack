<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    protected $table = "productos";
    protected $primaryKey = "id_producto";
    public $timestamps = false;

    protected $fillable = ["nombre_producto", "precio_producto", "destacado"];

    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class, 'categoria_producto' ,'producto_id', 'categoria_id');
    }

    public function talles(): BelongsToMany
    {
        return $this->belongsToMany(Talle::class, 'producto_talle', 'producto_id', 'talle_id')->withPivot('cantidad');
    }

    public function imagenes(): HasMany
    {
        return $this->hasMany(Imagen::class, 'producto_id', 'id_producto');
    }

}
