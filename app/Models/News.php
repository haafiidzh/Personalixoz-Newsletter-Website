<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news';

    protected $fillable = 
    [
        'title', 
        'slug', 
        'content', 
        'image', 
        'category_id',
        'author_id',
        'is_published'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }
}
