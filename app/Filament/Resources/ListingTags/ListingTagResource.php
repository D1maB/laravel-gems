<?php

namespace App\Filament\Resources\ListingTags;

use App\Filament\Resources\ListingTags\Pages\CreateListingTag;
use App\Filament\Resources\ListingTags\Pages\EditListingTag;
use App\Filament\Resources\ListingTags\Pages\ListListingTags;
use App\Filament\Resources\ListingTags\Schemas\ListingTagForm;
use App\Filament\Resources\ListingTags\Tables\ListingTagsTable;
use App\Models\ListingTag;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ListingTagResource extends Resource
{
    protected static ?string $model = ListingTag::class;

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ListingTagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ListingTagsTable::configure($table);
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
            'index' => ListListingTags::route('/'),
            'create' => CreateListingTag::route('/create'),
            'edit' => EditListingTag::route('/{record}/edit'),
        ];
    }
}
