<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    //
    function send(Request $request) {
        $data = array (
            'name' => $request->name,
            'business_name' => $request->business_name,
            'email' => $request->email,
            'eebsite' => $request->website,
            'phone' => $request->phone,
            'comments' => $request->comments,

        );
        Mail::to('storageblack100399@gmail.com')->send(new SendMail($data));
        return 200;
    }
}
