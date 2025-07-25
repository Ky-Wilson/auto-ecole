<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function envoyer(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'nullable|email',
            'telephone' => 'required',
            'commune' => 'nullable|string',
            'sujet' => 'required|string',
            'message' => 'required|string',
        ]);

        // Envoyer l'e-mail
        Mail::to('hlab.digital.center@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
