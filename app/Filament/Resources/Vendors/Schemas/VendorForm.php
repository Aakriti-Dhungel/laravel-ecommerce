<?php

namespace App\Filament\Resources\Vendors\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VendorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->hidden()
                    ->maxLength(255)
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->hidden()
                    ->required(),
                // DateTimePicker::make('email_verified_at'),
                Select::make('status')
                    ->required()
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
                    // ->default('pending'),
                TextInput::make('balance')
                    ->required()
                    ->numeric()
                    ->hidden()
                    ->default(0),
                TextInput::make('password')
                    ->password()
                    ->hidden()
                    ->required(),
            ]);
    }
}
