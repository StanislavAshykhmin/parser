<?php

namespace App\Model\Parser;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['title', 'vote', 'answer', 'view', 'url', 'tag_id'];


    public function tag()
    {
        return $this->belongsTo('App\Model\Dashboard\Tag');
    }
}
