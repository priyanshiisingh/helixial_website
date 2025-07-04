<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait DisplayOrder
{
    public static function bootDisplayOrder()
    {
        static::addGlobalScope('orderByDisplayOrder', function (Builder $builder) {
            $builder->orderBy('display_order', 'asc');
        });

        static::saving(function ($model) {
            if (!isset($model->display_order) || empty($model->display_order)) {
                $tableName = $model->getTable();
                $model->display_order = DB::table($tableName)
                    ->whereNull('deleted_at')
                    ->max('display_order') + 1 ?? 1;
            }
        });
    }
}
