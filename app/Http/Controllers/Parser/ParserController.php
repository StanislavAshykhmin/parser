<?php

namespace App\Http\Controllers\Parser;

use App\Events\ParserEvent;
use App\Http\Controllers\Controller;

class ParserController extends Controller
{
    public function getContent($tag){
        event(new ParserEvent($tag));
        return redirect()->back()->with('message', 'Parser finish');
    }

}
