<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProjectCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectCategoryFactory> */
    use HasFactory;

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
