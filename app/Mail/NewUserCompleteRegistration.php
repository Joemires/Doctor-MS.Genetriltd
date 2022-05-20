<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserCompleteRegistration extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->token = $token = Password::getRepository()->create($user);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.authentication.complete_registration')
            ->subject('Invitation Request')
            ->with([
                'token' => $this->token,
                'user' => $this->user,
            ]);
    }
}
