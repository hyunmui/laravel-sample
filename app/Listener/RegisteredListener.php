<?php

namespace App\Listener;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;

class RegisteredListener
{
    private $mailer;
    private $eloquent;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;
        $this->eloquent = $eloquent;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('회원 등록을 완료했습니다', function ($message) use ($user) {
            $message->subject('회원 등록 메일')->to($user->email);
        });
    }
}
