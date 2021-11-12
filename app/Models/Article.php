<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
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