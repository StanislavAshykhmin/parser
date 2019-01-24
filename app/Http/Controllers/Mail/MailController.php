<?php

namespace App\Http\Controllers\Mail;

use App\Enums\StatusType;
use App\Mail\SendMail;
use App\Model\Parser\Contact;
use App\Model\Dashboard\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send($id){
        $message = Message::find($id);
        $emails = $message->contacts;
        foreach ($emails as $email){
            Mail::to($email['email'])->queue(new SendMail($email, $message));
            $site = Contact::where('id', $email->id)->first()->site->update(['status' => StatusType::Processed]);
            $message->contacts()->sync([$email->id =>['status' => StatusType::SentTo]], false);
            }

        return redirect()->back()->with('message', 'Message sent');
    }

    public function checkMail($id){
        $contact = Contact::find($id);
        $messages = $contact->messages;
        foreach ($messages as $message){
            $contact->messages()->sync([$message->id =>['status' => StatusType::Open]], false);
        }
        return response(base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII='), 200, ['Content-Type' => 'image/png']);
    }
}
