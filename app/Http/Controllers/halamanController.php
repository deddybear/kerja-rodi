<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function IndexPage()
    {
        return view('index');
    }

    public function ProfilPage()
    {
        return view('profil');   
    }

    public function PendaftaranPage()
    {
        return view('pendaftaran');
    }
}
