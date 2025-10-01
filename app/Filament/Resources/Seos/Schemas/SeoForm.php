<?php

namespace App\Filament\Resources\Seos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SeoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),
                TextInput::make('type_id')
                    ->required(),
                TextInput::make('meta_keywords')
                    ->required(),
                TextInput::make('meta_description')
                    ->required(),
            ]);
    }
}
