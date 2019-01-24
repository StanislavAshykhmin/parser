<?php

namespace App\Model\Parser;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['cms_id', 'url', 'status', 'lang', 'email'];
    protected $with = [
//        'contacts'
    ];
    public function contacts(){
        return $this->hasMany('App\Model\Parser\Contact');
    }
    public function system(){
        return $this->belongsTo('App\Model\Dashboard\System');
    }
}
