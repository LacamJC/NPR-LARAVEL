<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    public function collectionPoints(): BelongsToMany
    {
        return $this->belongsToMany(CollectionPoint::class, 'collection_point_category');
    }
}
