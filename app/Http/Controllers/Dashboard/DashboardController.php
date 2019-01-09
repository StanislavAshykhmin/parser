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
        $records = Record::where([['tag_id', '>', 0], ['created_at', '>', Carbon::now()->startOfDay()]])->orderBy('view', 'desc')->limit(5)->get();
        return view('dashboard.dashboard', ['user' => Auth::user(), 'records' => $records, 'tags' => $tags]);
    }

    public function getGraphics($id, $from = null, $before = null)
    {
        $dates = Record::where([['created_at', '>=', Carbon::now()->startOfMonth()->toDateTimeString()], ['tag_id', $id]])->get();
        if ($before != null && $from != null) {
            $dates = Record::where([['created_at', '>=', $from], ['created_at', '<', $before], ['tag_id', $id]])->get();
        } elseif ($from != null) {
            $dates = Record::where([['created_at', '>=', $from], ['tag_id', $id]])->get();
        } else
            $dates = Record::where([['created_at', '>=', Carbon::now()->startOfMonth()->toDateTimeString()], ['tag_id', $id]])->get();
        $last = null;
        $counter = 1;
        $total = count($dates);
        $number = 0;
        foreach ($dates as $date) {
            $number++;
            $result = date_format($date->created_at, 'd');
            $day[] = $result;
            if ($result == $last) {
                $counter++;
            } else {
                if ($number != 1) {
                    $count[] = $counter;
                }
                $counter = 1;
            }
            if ($number == $total) {
                $count[] = $counter;
                $counter = 1;
            }
            $last = $result;
        }
        $day = array_values(array_unique($day));
        $countDay = count($day);
        if ($count && $day) {
            return response(['count' => $count, 'day' => $day, 'countDay' => $countDay], 200);
        }
        return response(['message' => 'Error !!'], 422);
    }
}
