<?php

namespace App\Filament\Resources\Materias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use App\Models\Curso;
class MateriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
              Select::make('curso_id')
        ->label('Curso')
        ->options(Curso::all()->pluck('nombre', 'id')) // nombre es el campo a mostrar
        ->searchable()
        ->required(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('profesor')
                    ->required(),
                TextInput::make('cantidad')
                    ->required()
                    ->numeric(),
                TextInput::make('grupo')
                    ->required(),
            ]);
    }
}
