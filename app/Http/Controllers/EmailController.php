<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request) {



        Mail::to('mandyrush85@gmail.com')->send(
            new ContactMe($request)
        );

        return redirect('/');
    }
}
