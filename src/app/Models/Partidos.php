<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    use HasFactory;
    protected $table = 'partidos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_partido'; // Clave primaria de la tabla
    protected $fillable = [
        'id_equipo_local',
        'id_equipo_visitante',
        'resultado',
    ];

    public function equipoLocal()
    {
        return $this->belongsTo(Equipos::class, 'id_equipo_local');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo(Equipos::class, 'id_equipo_visitante');
    }
}
