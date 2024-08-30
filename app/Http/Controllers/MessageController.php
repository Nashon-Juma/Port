<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:45',
            'phone' => 'nullable|string|regex:/^(\+?\d{1,4}[\s-]?)?(\(?\d{1,3}\)?[\s-]?)?[\d\s-]{5,20}$/|max:20', // Correct, allows phone numbers with optional country code, area code, and extension
            'subject' => 'required|max:25',
            'message' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to(env('MAIL_USERNAME'))->send(new MessageNotification($request->all()));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
