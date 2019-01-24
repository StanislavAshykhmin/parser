<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function records()
    {
        return $this->hasMany('App\Model\Parser\Record');
    }
}
