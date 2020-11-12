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
    // public function __construct(\stdClass $user)
    // {
    //     $this->user = $user;
    // }
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
        
        $i = sizeof($data);
 
        if($i > 0){
             $this->subject('E-MAIL AUTOMÁTICO - NÃO RESPONDA');
            $this->to($data[0]->email, $data[0]->name);

            return $this->view('auth/send', compact('data'));
        }else{
            return $this->view('home');
        } 
    }
}
