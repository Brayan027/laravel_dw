<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'profesor', 'cantidad', 'grupo', 'curso_id'];

    // Una materia pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}