<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camiseta extends Model
{
    protected $table = "camisetas";
    protected $primaryKey = "id_camiseta"; //crear los campos de la BD con el mismo nombre!
    public $timestamps = false; 

    protected $fillable = ["nombre_camiseta", "precio_camiseta", "categoria_camiseta"];

    public function categoria(): BelongsTo {
        return $this->belongsTo(Categoria::class, 'categoria_camiseta', "id_categoria"); //enlaza FK
    }
}
