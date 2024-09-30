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
            'name' => 'required|string|max:60',
            'email' => 'nullable|email|max:60',
            'phone' => 'nullable|integer',
            'subject' => 'required|max:225',
            'message' => 'required|max:2000',

            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'ip' => 'nullable|ip',
            'city' => 'nullable|string|max:25',
            'region' => 'nullable|string|max:25',
            'country' => 'nullable|string|max:4',
            'org' => 'nullable|string|max:50',
            'timezone' => 'nullable|string|max:50',

            'browser' => 'nullable|string',
            'os' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = array_merge($request->all(), [
            'sent_at' => now(),
        ]);

        Mail::to("nashon@techmates.team")->send(new MessageNotification($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
