<?php

namespace App\Http\Controllers\Landing;

use App\Mail\ResponseMail;
use App\Model\Response\Response;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class LandingController extends Controller
{
    public function index(){
        return view('landing.landing', ['user' => User::find(1)]);
    }

    public function contact(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'url'=>'required|url',
            'text'=>'required',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else {
            $user = User::where('id', '>', 0)->first();
            Response::create([
                'name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'url' => $data['url'],
                'text' => $data['text'],
            ]);
            Mail::to($user->email)->send(new ResponseMail($data));
            return response()->json(['success' => 'Thanks you. We will contact you within 24 hours.']);
        }
    }
}
