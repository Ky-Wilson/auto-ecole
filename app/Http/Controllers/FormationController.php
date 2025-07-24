<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormationInscription;

class FormationController extends Controller
{
    public function envoyerInscription(Request $request)
    {
        $validated = $request->validate([
            'formation' => 'required|string',
            'nom' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'nullable|email',
            'commune' => 'nullable|string',
            'date_debut' => 'nullable|date',
        ]);

        // Envoi du mail
        Mail::to('hlab.digital.center@mail.com')->send(new FormationInscription($validated));

        return back()->with('success', 'Votre inscription a bien été envoyée.');
    }
}
