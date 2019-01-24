<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = ['name', 'status'];
    public function sites(){
        return $this->hasMany('App\Model\Parser\Site');
    }
    public function contacts(){
        return $this->hasManyThrough('App\Model\Parser\Contact', 'App\Model\Parser\Site');
    }

}
