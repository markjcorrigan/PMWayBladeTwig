<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;


class BlogPost extends Model
{
    use Searchable;

    public function toSearchableArray()
    {
        return [
            'post_title' => $this->post_title,
            'post_slug' => $this->post_slug,
            'post_tags' => $this->post_tags,
            'post_description' => $this->post_description,
        ];
    }




    //    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'name',
        'post_title',
        'post_slug',
        'photo',
        'post_tags',
        'post_description',
    ];

    public function scopeApprovedByUser($query, $userName)
{
    return $query->whereHas('user', function ($query) use ($userName) {
        $query->where('name', $userName);
    })->where('approved', 1);
}

public static function approvedCount()
{
    return self::where('approved', 1)->count();
}


    public function votes()
    {
        return $this->hasMany(BlogPostVote::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
