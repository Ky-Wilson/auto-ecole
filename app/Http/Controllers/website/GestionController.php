<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    // Accueil
    public function bienvenues()
    {
        return view('site.accueil');
    }

    // Nos services
    public function services()
    {
        return view('site.services');
    }

    // Nos contacts
    public function contact()
    {
        return view('site.contact');
    }
}
