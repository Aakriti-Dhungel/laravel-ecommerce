<?php

namespace App\Filament\Vendor\Resources\Vendors;

use App\Filament\Vendor\Resources\Vendors\Pages\CreateVendor;
use App\Filament\Vendor\Resources\Vendors\Pages\EditVendor;
use App\Filament\Vendor\Resources\Vendors\Pages\ListVendors;
use App\Filament\Vendor\Resources\Vendors\Pages\ViewVendor;
use App\Filament\Vendor\Resources\Vendors\Schemas\VendorForm;
use App\Filament\Vendor\Resources\Vendors\Schemas\VendorInfolist;
use App\Filament\Vendor\Resources\Vendors\Tables\VendorsTable;
use App\Models\Vendor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-s-user-circle';
    protected static  ?string $modelLabel = ' Shop Profile';
    protected static  ?string $pluralModelLabel = 'Shop Profile';


    public static function canCreate(): bool
    {
        return false;
    }
    protected static ?string $recordTitleAttribute = 'email';

    public static function form(Schema $schema): Schema
    {
        return VendorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VendorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VendorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVendors::route('/'),
            'create' => CreateVendor::route('/create'),
            'view' => ViewVendor::route('/{record}'),
            'edit' => EditVendor::route('/{record}/edit'),
        ];
    }
}
