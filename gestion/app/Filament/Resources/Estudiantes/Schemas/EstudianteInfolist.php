<?php

namespace App\Filament\Resources\Estudiantes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EstudianteInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('curso_id')
                    ->numeric(),
                TextEntry::make('nombre'),
                TextEntry::make('apellido'),
                TextEntry::make('edad')
                    ->numeric(),
                TextEntry::make('telefono'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
