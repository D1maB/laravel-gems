<?php

namespace App\Filament\Resources\Listings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieTagsColumn;

class ListingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
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



                Select::make('tags')
                    ->multiple()
                    ->options([
                        'tailwind' => 'Tailwind CSS',
                        'alpine' => 'Alpine.js',
                        'laravel' => 'Laravel',
                        'livewire' => 'Laravel Livewire',
                    ]),

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
