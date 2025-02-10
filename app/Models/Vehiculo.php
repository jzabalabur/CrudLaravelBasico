<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Modelo;

class Vehiculo extends Model
{
    /** @use HasFactory<\Database\Factories\VehiculoFactory> */
    use HasFactory;
    protected $fillable = [
        'modelo',
        'año',
        'precio',
        'marca_id',
    ];
    protected $guarded = ['id'];

    public function modelo(): HasOne
    {
        return $this->hasOne(Modelo::class);
    }
}
