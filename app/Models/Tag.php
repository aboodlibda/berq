<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function articles ()
    {
        return $this->belongsToMany(Article::class,'article_tags','article_id','tag_id');
    }

}
