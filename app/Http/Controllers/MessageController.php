<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function __invoke(MessageRequest $request)
    {
        Mail::to(config('mail.from.address'))
            ->send(new MessageMail($request->validated()));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
