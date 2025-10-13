<?php

namespace App\Filament\Vendor\Resources\Products\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                ImageEntry::make('image'),
                TextEntry::make('qty')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('discount')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('category.name')
                    ->label('Category'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('vendor.name')
                    ->label('Vendor')
                    ->placeholder('-'),
            ]);
    }
}
