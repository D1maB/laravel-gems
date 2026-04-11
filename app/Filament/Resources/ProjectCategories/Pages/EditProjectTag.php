<?php

namespace App\Filament\Resources\ProjectCategories\Pages;

use App\Filament\Resources\ProjectCategories\ProjectCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProjectTag extends EditRecord
{
    protected static string $resource = ProjectCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            //DeleteAction::make(),
        ];
    }
}
