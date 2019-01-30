<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\Parser\Site;
use App\Model\Dashboard\System;
use App\User;
use App\Http\Controllers\Controller;

class CmsController extends Controller
{
    public function index(){
        return view('dashboard.systems.index', ['allCms' => System::withCount('sites')->get(), 'user' => User::find(1)]);
    }

    public function show($id){
        return view('dashboard.systems.show', ['system' => System::find($id), 'sites' => Site::where('system_id', $id)->orderBy('status', 'desc')->orderByRaw("FIELD(lang , 'en-US', 'en') desc")->paginate(6), 'user' => User::find(1)]);
    }
}
