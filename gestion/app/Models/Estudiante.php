<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'edad', 'telefono', 'curso_id'];

    // Un estudiante pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}