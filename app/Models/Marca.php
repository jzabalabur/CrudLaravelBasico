<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Vehiculo;


class Marca extends Model
{
    /** @use HasFactory<\Database\Factories\MarcaFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    protected $guarded = ['id'];

    public function vehiculo(): BelongsToMany
    {
        return $this->belongsToMany(Vehiculo::class);
    }
}

