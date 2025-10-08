<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Curso;
use App\Models\Materia;
use App\Models\Estudiante;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cursos', Curso::query()->count()),
            Stat::make('Materias', Materia::query()->count()),
            Stat::make('Estudiantes', Estudiante::query()->count()),
        ];
    }
}