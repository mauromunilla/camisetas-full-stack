<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Talle extends Model
{
    protected $table = "talles";
    protected $primary_key = "id";
    public $timestamps = false;

    protected $fillable = ["medida"];

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class, "producto_talle", "talle_id", "producto_id")->withPivot('cantidad');
    }
}
