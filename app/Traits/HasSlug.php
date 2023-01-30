<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Generate a slug
     *
     * @return void
     */
    public static function bootHasSlug()
    {
        static::creating(function (self $model) {
            foreach ($model->slugConfigs() as $column => $target) {
                if (empty($model->{$column})) {
                    $model->{$column} = $model->newSlug($column, $target);
                }
            }
        });
    }


    /**
     * Generate new slug
     *
     * @param  mixed $column
     * @param  mixed $target
     * @return string
     */
    public function newSlug($column, $target): string
    {
        $slug = Str::slug($this->{$target});
        $check = DB::table($this->getTable())->where($column, 'like', $slug . '%')->count();

        if ($check) {
            return sprintf("%s-%d", $slug, $check);
        }

        return $slug;
    }

    /**
     * Get target slug
     *
     * @return array
     */
    public function slugConfigs(): array
    {
        return [];
    }
}