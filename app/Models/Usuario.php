<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = ['nombre', 'apellidos', 'email', 'contraseña', 'saldo', 'id_suscripcion'];

    public function suscripcion()
    {
        return $this->belongsTo(Suscripcion::class, 'id_suscripcion');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'productos_usuario', 'id_usuario', 'id_producto');
    }

    public function recompensas()
    {
        return $this->belongsToMany(Recompensas::class, 'usuario_recompensa', 'id_usuario', 'id_recompensa');
    }
}
