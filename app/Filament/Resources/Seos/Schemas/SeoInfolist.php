<?php

namespace App\Filament\Resources\Seos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SeoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('type'),
                TextEntry::make('type_id'),
                TextEntry::make('meta_keywords'),
                TextEntry::make('meta_description'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
