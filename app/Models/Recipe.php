<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    protected $fillable = [
        'user_id', 'ingredients_input', 'title', 'content', 'is_bookmarked',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}