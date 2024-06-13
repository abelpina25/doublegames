<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function contact()
    {
        //pagina contato
        return view('staticPages.contact');
    }

    public function about()
    {
        //pagina sobre nos
        return view('staticPages.about');
    }
}
