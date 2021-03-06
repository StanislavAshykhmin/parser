<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\ParserStackOverflow;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Model\Dashboard\Tag;
use App\Model\Parser\Record;
use Helmesvs\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    public function index()
    {
        return view('dashboard.tags.index', ['user' => Auth::user(), 'tags' => Tag::withCount('records')->get()]);
    }

    public function store(TagRequest $request)
    {
        $data = $request->all();
        $content = new ParserStackOverflow();
        $records = $content->index($data['name']);
        if ($records[4] != 0) {
            Tag::create([
                'name' => $data['name'],
            ]);
            Notify::success('Tag created', 'Success', $options = []);
            return redirect()->back();
        } else
            return redirect()->back()->with('messageCreateError', 'Tag does not exist. Please enter new tag.');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Notify::success('Tag deleted', 'Success', $options = []);
        return redirect()->back();
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        $records = Record::where('tag_id', $id)->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.tags.show', ['user' => Auth::user(), 'records' => $records, 'tag' => $tag]);
    }

}
