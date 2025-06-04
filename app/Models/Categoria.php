<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'color',
        'icono',
        'user_id',
    ];

    // 🔁 Relación: una categoría pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // 🔁 Relación: una categoría tiene muchas transacciones
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class);
    }
}
