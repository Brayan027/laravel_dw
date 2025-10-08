<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
class BlogPostsChart extends ChartWidget

{
    protected ?string $heading = 'Clientes Registrados Over Time';

    protected function getData(): array
    {
      
        $clientesPorFecha = Cliente::selectRaw('DATE(created_at) as fecha, COUNT(*) as total')
            ->groupBy('fecha')
            ->orderBy('fecha')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Clientes registrados',
                    'data' => $clientesPorFecha->pluck('total'),
                ],
            ],
            'labels' => $clientesPorFecha->pluck('fecha'),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
