<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'category_id', 'is_publish', 'published_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
