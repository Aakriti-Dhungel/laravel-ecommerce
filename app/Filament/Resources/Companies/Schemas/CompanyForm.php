<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('logo')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('facebook')
                    ->default(null),
                TextInput::make('instagram')
                    ->default(null),
                TextInput::make('youtube')
                    ->default(null),
                TextInput::make('term')
                    ->required(),
                TextInput::make('policy')
                    ->required(),
            ]);
    }
}
