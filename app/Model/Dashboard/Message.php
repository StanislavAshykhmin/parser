<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['label', 'title', 'text', 'system_id', 'message_id', 'status'];

    protected $with = [
      'systems'
    ];

    public function contacts(){
        return $this->belongsToMany('App\Model\Parser\Contact');
    }
    public function sites(){
        return $this->hasManyThrough('App\Model\Parser\Site', 'App\Model\Parser\Contact');
    }

    public function systems(){
        return $this->belongsToMany('App\Model\Dashboard\System');
    }

    public function saveMessage(){
        return $this->hasMany('App\Model\Dashboard\Message', 'id');
    }
}
