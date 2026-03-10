<?php

namespace App\Filament\Resources\Listings\Schemas;

use App\Models\Listing;
use App\Models\ListingTag;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieTagsColumn;
use Illuminate\Support\Str;

class ListingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(Listing::class, 'slug', fn ($record) => $record),

                TextInput::make('short_description')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('preview_image')
                    ->image(),
                TextInput::make('github_url')
                    ->url(),
                TextInput::make('website_url')
                    ->url(),
                TextInput::make('creator_twitter_url')
                    ->url(),


                Select::make('listing_tags')
                    ->relationship('tags', 'name')
                    ->options(ListingTag::query()->pluck('name', 'id'))
                    ->multiple(),

                TextInput::make('status')
                    ->required()
                    ->default('awaiting-review'),
                TextInput::make('seo_title'),
                TextInput::make('seo_description'),
                TextInput::make('seo_keywords'),
                TextInput::make('listing_category_id')
                    ->numeric(),
            ]);
    }
}
