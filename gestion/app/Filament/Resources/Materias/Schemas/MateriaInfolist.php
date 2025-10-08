<?php

namespace App\Filament\Resources\Materias\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MateriaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('curso_id')
                    ->numeric(),
                TextEntry::make('nombre'),
                TextEntry::make('profesor'),
                TextEntry::make('cantidad')
                    ->numeric(),
                TextEntry::make('grupo'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
