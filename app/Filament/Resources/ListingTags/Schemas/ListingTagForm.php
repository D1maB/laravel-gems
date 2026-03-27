<?php

namespace App\Filament\Resources\ListingTags\Schemas;

use App\Models\Listing;
use App\Models\ListingTag;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ListingTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Main')->schema([
                    TextInput::make('name')
                        ->maxLength(255)
                        ->required()
                        ->live()
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(ListingTag::class, 'slug', fn ($record) => $record),

                    TextInput::make('short_description')
                        ->required()
                        ->maxLength(255),
                ]),
                Section::make('SEO')->schema([
                    TextInput::make('seo_title')
                        ->maxLength(255),
                    TextInput::make('seo_description')
                        ->maxLength(255),
                    TextInput::make('seo_keywords')
                        ->maxLength(255),
                ])
            ]);
    }
}
