<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_number',
        'file',
        "category_id",
        "title"
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
