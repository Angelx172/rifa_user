<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    use HasFactory;

    protected $table = 'rifas';
    protected $fillable = [
        'nombre_rifa',
        'descripcion_rifa',
        'precio_rifa',
        'num_boletos_rifa',
        'imagen_rifa',
        'fecha_cierre_rifa',
        'estatus_rifa',
    ];

    public const ESTATUS = ['Inactiva', 'Activa', 'Finalizada'];

    public function estatus(){
        return self::ESTATUS[ $this->estatus_rifa];
    }
}
