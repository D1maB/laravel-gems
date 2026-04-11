<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;


    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('status', 'active');
    }

    public function imgUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                return Storage::url($this->preview_image);
            }
        );
    }

    public function isActive(): bool
    {
        return $this->status == 'active';
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            ProjectCategory::class,
            'project_category',
            'project_id',
            'category_id',
        );
    }

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('preview_image') && ($model->getOriginal('preview_image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('preview_image'));
            }
        });

        /** @var Model $model */
        static::deleting(function ($model) {
//            if (Storage::disk('public')->exists($model->getOriginal('preview_image'))) {
//                Storage::disk('public')->delete($model->getOriginal('preview_image'));
//            }
        });

    }

}
