<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\StatusType;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\MessageUpdateRequest;
use App\Model\Dashboard\Message;
use App\Model\Dashboard\System;
use App\User;
use App\Http\Controllers\Controller;

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
        return redirect()->back()->with('message', 'Message created');
    }

    public function edit($id)
    {
        $message = Message::whereId($id)->first();
        if ($message) {
            return response(['message' => $message], 200);
        }
        return response(['message' => 'Error !!'], 422);
    }

    public function update(MessageUpdateRequest $request)
    {
        $data = $request->except('_token');
        $message = Message::find($data['id']);
        $message->delete();
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
        return redirect()->back()->with('message', 'Message updated');
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('message', 'Message deleted');
    }

}
