<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Enums\ProjectStatus;
use App\Models\Project;
use App\Models\ProjectTag;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ProjectForm
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
                        ->unique(Project::class, 'slug', fn ($record) => $record),

                    TextInput::make('short_description')
                        ->maxLength(255)
                        ->required(),

                    Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),

                    FileUpload::make('preview_image')
                        ->required()
                        ->image()
                        ->directory('projects')
                        ->disk('public')
                        ->imageEditor(),

                    TextInput::make('github_url')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('website_url')
                        ->url()
                        ->maxLength(255),

                    TextInput::make('creator_twitter_url')
                        ->maxLength(255)
                        ->url(),


                    Select::make('project_tags')
                        ->relationship('tags', 'name')
                        ->options(ProjectTag::query()->pluck('name', 'id'))
                        ->multiple(),

                    Select::make('status')
                        ->options(ProjectStatus::class)
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
