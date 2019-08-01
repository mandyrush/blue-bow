<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class EmailController extends Controller
{
    public function send(Request $request) {

        $messages = [
            'weddingDate.after' => 'The wedding date must be a future date.',
            'phone.numeric' => 'The phone must be a number with no spaces or dashes.'
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'nullable|numeric|digits:10',
            'weddingDate' => 'nullable|after:today',
            'message' => 'required'
        ], $messages);

        if( $validator-> fails()) {
            return redirect('/#contact-me')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to('bluebowfashion@gmail.com')->send(
            new ContactMe($request)
        );

        return redirect('/')
            ->with('flash', 'Your message has been sent!');
    }
}
