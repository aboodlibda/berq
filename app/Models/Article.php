<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Article extends Model
{
    use Commentable;

    protected $guarded = [];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags ()
    {
        return $this->belongsToMany(Tag::class,'article_tags');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
