<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function readTime($wordsPerMinute = 200){
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / max(1, (int) $wordsPerMinute));

        return max(1, $minutes);
    }

    /**
     * Get the public URL for the post's image stored in the public disk.
     */
    public function imageUrl(): string
    {
        return asset('storage/' . $this->image);
    }
}
