<?php

namespace App\Filament\Vendor\Resources\Vendors\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VendorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Repeater::make('shop')
                    ->relationship('shop')
                    ->columnSpanFull()
                    ->addable(false)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Shop Name')
                            ->maxLength(255),
                        TextInput::make('address')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('map')
                            ->required(),
                        FileUpload::make('logo')
                            ->required(),
                    ])
            ]);
    }
}
