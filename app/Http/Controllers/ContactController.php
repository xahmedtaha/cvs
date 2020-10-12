<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message as MessageRequest;
use App\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function message(MessageRequest $request){
        $data = $request->validated();
        Mail::to(env('CONTACT_EMAIL', 'xahmedtaha930@gmail.com'))->send(new Message($data['name'], $data['email'], $data['message']));
        return redirect(route('home').'#contact')->with('messageSent', true);
    }
}
