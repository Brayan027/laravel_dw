<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'nivel', 'duracion'];

    // Un curso tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    // Un curso tiene muchas materias
    public function materias()
    {
        return $this->hasMany(Materia::class);
    }
}