<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Dashboard\Tag;
use App\Model\Parser\Record;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $records = Record::where([['tag_id', '>', 0], ['parser_date', '>', Carbon::now()->startOfDay()]])->orderBy('view', 'desc')->limit(5)->get();
        return view('dashboard.dashboard', ['user' => Auth::user(), 'records' => $records, 'tags' => $tags]);
    }

    public function getGraphics($id, $from = null, $before = null)
    {
        $count = [];
        $day = [];
        if ($before != null && $from != null) {
            $before = Carbon::parse($before);
            $from = Carbon::parse($from);
        } elseif ($from != null) {
            $before = Carbon::now();
            $from = Carbon::parse($from);
        } else{
            $before = Carbon::now();
            $from = Carbon::now()->startOfMonth();
        }
        while ($from <= $before) {
             $count[] = Record::whereDate('parser_date', '=', $from->toDateString())->whereTagId($id)->count('id');
             $day[] = date_format($from, 'd');
             $from->addDay();
        }
        if ($count && $day) {
            return response(['count' => $count, 'day' => $day, 'countDay' => count($day)], 200);
        }
        return response(['message' => 'Error !!'], 422);
    }
}
