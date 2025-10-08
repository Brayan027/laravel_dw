<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Curso;

class BlogPostsChart extends ChartWidget
{
    protected ?string $heading = 'Estudiantes por Curso';

    protected function getData(): array
    {
        $cursos = Curso::withCount('estudiantes')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Estudiantes',
                    'data' => $cursos->pluck('estudiantes_count')->toArray(),
                ],
            ],
            'labels' => $cursos->pluck('nombre')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}       