<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagen extends Model
{
    protected $table = "imagenes";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = ["producto_id", "url"];

    public function productos(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id_producto');
    }
}
