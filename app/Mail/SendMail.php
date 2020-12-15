<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\User;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build(Request $request)
    {
        $data = User::where('email',$request->email)->get();
        $token = $data[0]->remember_token;

        $i = sizeof($data);
        
        if($i > 0){

            $dateTime = date(now());

            $token = bin2hex($data[0]->email.$token);
            $user = User::find($data[0]->id);

            $user->token = $token;
            $user->save();

            $this->subject('Email automático - não responda');
            $this->to($data[0]->email, $data[0]->name);

            return $this->view('auth/send', compact('data','token'));
        }else{
            return $this->view('home');
        } 
    }
}
