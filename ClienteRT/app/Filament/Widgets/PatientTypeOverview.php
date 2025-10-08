<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Cliente;

class PatientTypeOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            //
                        Stat::make('Total de Clientes', Cliente::count()),

        ];
    }
}
