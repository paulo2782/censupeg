<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;

use App\User;
>>>>>>> 71b4acd5f4e77bc509ebc17c3257de102a6678ba

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct(\stdClass $user)
    {
        $this->user = $user;
=======
    // public function __construct(\stdClass $user)
    // {
    //     $this->user = $user;
    // }
    public function __construct()
    {
        
>>>>>>> 71b4acd5f4e77bc509ebc17c3257de102a6678ba
    }

    /**
     * Build the message.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function build()
    {
        $this->subject('Assunto');
        $this->to($this->user->email, $this->user->name);

        return $this->view('auth/recovery_password', [
            'user' => $this->user
        ]);
=======
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
>>>>>>> 71b4acd5f4e77bc509ebc17c3257de102a6678ba
    }
}
