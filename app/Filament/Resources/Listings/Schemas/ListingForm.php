<?php

namespace App\Filament\Resources\Listings\Schemas;

use App\Enums\ListingStatus;
use App\Models\Listing;
use App\Models\ListingTag;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ListingForm
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                Section::make('Main')->schema([

                    TextInput::make('title')
                        ->maxLength(255)
                        ->live()
                        ->required()
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->maxLength(255)
                        ->required()
                        ->maxLength(255)
                        ->unique(Listing::class, 'slug', fn ($record) => $record),

                    TextInput::make('short_description')
                        ->maxLength(255)
                        ->required(),

                    Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                    FileUpload::make('preview_image')
                        ->image(),

                    TextInput::make('github_url')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('website_url')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('creator_twitter_url')
                        ->maxLength(255)
                        ->url(),


                Select::make('listing_tags')
                    ->relationship('tags', 'name')
                    ->options(ListingTag::query()->pluck('name', 'id'))
                    ->multiple(),

                    Select::make('status')
                        ->options(ListingStatus::class)
                        ->required(),
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
