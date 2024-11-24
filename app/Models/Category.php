<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    /**
     * Get all of the comments for the Category
     *
     */
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }
}
