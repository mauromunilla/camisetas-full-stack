<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Talle extends Model
{
    protected $table = "talles";
    protected $primary_key = "id_talle";
    public $timestamps = false;

    protected $fillable = ["medida"];

    public function producto(): HasMany
    {
        return $this->HasMany(Talle::class, "talle_id");
    }
}
