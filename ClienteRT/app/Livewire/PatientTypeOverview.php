<?php

namespace App\Livewire;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            //$edades = Cliente::query()
            ->selectRaw('edad, COUNT(*) as total')
            ->groupBy('edad')
            ->orderBy('edad')
            ->pluck('total', 'edad');

        return [
            'datasets' => [
                [
                    'label' => 'Clientes por edad',
                    'data' => $edades->values(),
                ],
            ],
            'labels' => $edades->keys(),
        ];
    }
    
}

