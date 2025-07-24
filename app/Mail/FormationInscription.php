<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormationInscription extends Mailable
{
    use Queueable, SerializesModels;

    public $donnees;

    public function __construct($donnees)
    {
        $this->donnees = $donnees;
    }

    public function build()
    {
        return $this->subject('Nouvelle demande d\'inscription')
                    ->view('site.emails.inscription');
    }
}
