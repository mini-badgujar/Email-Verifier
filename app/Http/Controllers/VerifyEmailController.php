<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VerifyEmailController extends Controller
{

    public function index()
    {
        return view('index');
    }



    public function store(Request $request)
    {
        try {
            // getting data from form email textarea using request and converting a string into array of email address
        $emails = collect(explode("\r\n", $request->input('emails')));
        $emails = $emails->toArray();

        // foreach($emails as $email)
        // {
        //    $this->validate($request, [
        //         'email' => 'email:rfc,dns'
        //    ]);
        // }
        $request = new \Illuminate\Http\Request();
        $request->replace($emails);
         $this->validate($request, [
                    '*' => 'email:rfc,dns'
               ]);



        return view('index', [
            'emails' => $emails
        ]);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
