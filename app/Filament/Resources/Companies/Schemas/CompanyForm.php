<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
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
                FileUpload::make('logo')
                    ->label('Company Logo')
                    ->image() // ensures it accepts only images and shows preview
                    ->disk('public') // store in storage/app/public
                    ->directory('companies') // store inside companies folder
                    ->visibility('public') // make it publicly accessible
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->telRegex('/^(?:\+977[- ]?)?(?:98\d{8}|97\d{8}|0\d{1,2}\d{6,7})$/')
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
