<?php

namespace App\Model\Parser;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['url_id', 'email'];
    public function site(){
        return $this->belongsTo('App\Model\Parser\Site');
    }

    public function messages(){
        return $this->belongsToMany('App\Model\Dashboard\Message')->withPivot('status')->withTimestamps();
    }

}
