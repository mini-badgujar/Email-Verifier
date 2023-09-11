<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;


class VerifyEmailController extends Controller
{

    public function index()
    {
        return view('index');
    }



    public function store(Request $request)
    {
        $request->flash();
         // getting data from form email textarea using request and converting a string into array of email address
        $emails = collect(explode("\r\n", $request->input('emails')));

        $emails = $emails->toArray(); // converting it to array
        $validEmail = []; //array to store valid emails
        $InvalidEmail = []; //array to store invalid emails


        // using symphony for command execution
        // use Symfony\Component\Process\Process;
        // $executableFinder = new ExecutableFinder();
        // $node = $executableFinder->find('node');
        // $process = new Process([$node, '..\resources\js\email-validator.js', "mini@gmail.com"]);

        foreach ($emails as $email) {
            $command = 'node ..\resources\js\email-validator.js ' . $email;  //command for node file execution
            $output= shell_exec($command);       // php method to run the command in command line

            if (Str::contains($output, 'valid')){
                array_push($validEmail, $output);          // pusing valid emails in valid emails array
            } else
            {
                array_push($InvalidEmail, $output);        // pusing Invalid emails in Invalid emails array
            }

        }
        return view('index', [
            'emails' => $emails,
            'ValidEmail' => $validEmail,
            'InvalidEmail' => $InvalidEmail
        ]);

    }
}

