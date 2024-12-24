<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producto extends Model
{
    protected $table = "productos";
    protected $primary_key = "id_producto";
    public $timestamps = false;

    public function categoria(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class, 'categorias' ,'categoria_id', 'id_categoria');
    }

    public function camiseta(): BelongsTo
    {
        return $this->belongsTo(Camiseta::class, 'camiseta_id', 'id_camiseta');
    }

    public function talle(): BelongsTo
    {
        return $this->belongsTo(Talle::class, 'talle_id', 'id_talle');
    }

}
