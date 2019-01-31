<?php

namespace App\Http\Controllers\Parser;

use App\Events\ParserEvent;
use App\Http\Controllers\Controller;
use Helmesvs\Notify\Facades\Notify;

class ParserController extends Controller
{
    public function getContent($tag){
        event(new ParserEvent($tag));
        Notify::success('Parser started. Please reload page after 2 minutes!', 'Success', $options = []);
        return redirect()->back();
    }

}
