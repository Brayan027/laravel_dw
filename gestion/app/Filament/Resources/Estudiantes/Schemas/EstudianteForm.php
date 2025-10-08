<?php

namespace App\Filament\Resources\Estudiantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use App\Models\Curso;
class EstudianteForm
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
                TextInput::make('curso_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('edad')
                    ->required()
                    ->numeric(),
                TextInput::make('telefono')
                    ->tel(),
            ]);
    }
}
