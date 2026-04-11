<?php

namespace App\Filament\Resources\ProjectCategories;

use App\Filament\Resources\ProjectCategories\Pages\CreateProjectTag;
use App\Filament\Resources\ProjectCategories\Pages\EditProjectTag;
use App\Filament\Resources\ProjectCategories\Pages\ListProjectTags;
use App\Filament\Resources\ProjectCategories\Schemas\ProjectTagForm;
use App\Filament\Resources\ProjectCategories\Tables\ProjectTagsTable;
use App\Models\ProjectCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProjectTagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectTagsTable::configure($table);
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
            'index' => ListProjectTags::route('/'),
            'create' => CreateProjectTag::route('/create'),
            'edit' => EditProjectTag::route('/{record}/edit'),
        ];
    }
}
