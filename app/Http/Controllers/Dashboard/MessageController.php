<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\StatusType;
use App\Http\Requests\MessageRequest;
use App\Model\Dashboard\Message;
use App\Model\Dashboard\System;
use App\User;
use App\Http\Controllers\Controller;
use Helmesvs\Notify\Facades\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        return view('dashboard.message.index', ['messages' => Message::with('systems')->get(), 'user' => User::find(1), 'systems' => System::all()]);
    }

    public function store(MessageRequest $request)
    {
        $data = $request->all();
        Message::create([
            'label' => $data['label'],
            'title' => $data['title'],
            'text' => $data['text'],
        ]);
        foreach ($data['system_id'] as $system) {
            $emails = System::where('id', $system)->first()->contacts;
            $save = Message::where('label', $data['label'])->first();
            $save->systems()->attach(
                ['system_id' => $system]
            );
            foreach ($emails as $email) {
                $save->contacts()->attach(
                    ['contact_id' => $email->id],
                    ['status' => StatusType::NotSend]);
            }
        }
        Notify::success('Message created', 'Success', $options = []);
        return redirect()->back();
    }

    public function edit($id)
    {
        $message = Message::whereId($id)->first();
        if ($message) {
            return response(['message' => $message], 200);
        }
        return response(['message' => 'Error !!'], 422);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'label'=>'required',
            'title'=>'required',
            'text'=>'required',
            'system_id'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $message = Message::find($data['id']);
        $message->systems()->detach();
        $message->contacts()->detach();
        $message->label = $data['label'];
        $message->title = $data['title'];
        $message->text = $data['text'];
        $res = $message->saveMessage()->save($message);

        foreach ($data['system_id'] as $system) {
            $emails = System::where('id', $system)->first()->contacts;
            $message->systems()->attach(
                ['system_id' => $system]
            );
            foreach ($emails as $email) {
                $message->contacts()->attach(
                    ['contact_id' => $email->id],
                    ['status' => StatusType::NotSend]);
            }
        }
        return response()->json(['success' => 'Message updated']);
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        Notify::success('Message deleted', 'Success', $options = []);
        return redirect()->back();
    }

}
