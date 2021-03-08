<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Appointment Details")
                    ->view('homepage.appointmentcontent', ['data' => $this->data])
                    ->attach($this->data['devicePhoto']->getRealPath(), [
                        'as' => $this->data['devicePhoto']->getClientOriginalName()
                    ]);
    }
}
