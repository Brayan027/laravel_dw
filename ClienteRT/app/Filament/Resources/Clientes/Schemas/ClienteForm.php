<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('edad')
                    ->required()
                    ->numeric(),
                TextInput::make('correo')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
            ]);
    }
}
