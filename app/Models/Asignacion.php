<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignacion'; // nombre exacto de la tabla

    protected $primaryKey = 'id_asignacion';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = false; // Si la tabla no tiene columnas created_at / updated_at

    // Campos asignables en masa
    protected $fillable = [
        'inscripcion_codigo',
        'escuela_id_escuela',
        'seccion_id_seccion',
        'grado_id_grado',
        'catedratico_cui',
        'curso_id_curso',
    ];

    // Relaciones

    public function inscripcion()
    {
        return $this->belongsTo(Inscripcion::class, 'inscripcion_codigo', 'codigo');
    }

    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'escuela_id_escuela', 'id_escuela');
    }

    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'seccion_id_seccion', 'id_seccion');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'grado_id_grado', 'id_grado');
    }

    public function catedratico()
    {
        return $this->belongsTo(Catedratico::class, 'catedratico_cui', 'cui');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id_curso', 'id_curso');
    }
}
