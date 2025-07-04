<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait Sluggable
{
    public static function bootSluggable()
    {
        static::saving(function ($model) {
            $updateSlug = method_exists($model, 'isSlugUpdateOnEdit') ? $model->isSlugUpdateOnEdit() : true;
            $slugField = method_exists($model, 'getSlugField') ? $model->getSlugField() : 'title';

            if (empty($model->slug)) {
                if (empty($model->slug)) {
                    // If the slug is null or empty, use the original slug
                    if ($model->exists) {
                        $model->slug = $model->getOriginal('slug'); // Keep the original slug
                    } else {
                        if ($model->isDirty($slugField)) {
                            $model->slug = $model->generateSlug($model->$slugField);
                        }
                    }
                } else {
                    $model->slug = $model->generateSlug($model->slug);
                }
            }
        });
    }

    // Method to generate a unique slug
    public function generateSlug($value)
    {
        $model = static::getModel();
        $slug = Str::slug($value);
        $count = static::where('slug', 'like', "{$slug}%")
            ->where($model->primaryKey, '<>', $model->{$model->primaryKey})
            ->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
