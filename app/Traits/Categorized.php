<?php

namespace App\Traits;

use App\Models\Category;

trait Categorized
{
    public function categories()
    {
        return $this->morphToMany(Category::class, 'model_category');
    }
}
