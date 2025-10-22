<?php

namespace App\Filament\Vendor\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vendor_id')
                    ->readOnly()
                    ->columnSpanFull()
                    ->default(Auth::guard('vendor')->user()->id)
                    ->rules([
                        Rule::in([Auth::guard('vendor')->user()->id]), // Validate that vendor_id matches authenticated vendor's ID
                    ])
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->maxLength(255)
                    ->required(),
                // TagsInput::make('keywords')
                //     ->required(),
                // TextInput::make('qty')
                //     ->required()
                //     ->numeric(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('NRs.'),
                TextInput::make('discount')
                    ->numeric()
                    ->suffix('%')
                    ->default(null),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->required()
                    ->image()
                    ->helperText('Accepted formats: jpeg, png, gif'),
            ]);
    }
}
