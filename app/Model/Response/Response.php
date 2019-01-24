<?php

namespace App\Model\Response;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'url', 'text'];
}
