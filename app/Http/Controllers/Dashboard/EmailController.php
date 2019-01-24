<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\Parser\Contact;
use App\Model\Parser\Site;
use App\User;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function show($id){
        return view('dashboard.site.show', [
            'site' => Site::find($id),
            'contact' => Contact::where('site_id', $id)->pluck('email')->first(),
            'messages' => Contact::where('site_id', $id)->first()->messages,
            'user' => User::find(1)]);
    }
}
