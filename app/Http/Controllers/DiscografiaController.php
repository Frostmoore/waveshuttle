<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DiscografiaController extends Controller
{
    /**
     * Pagina statica "Discografia".
     */
    public function __invoke()
    {
        return view('General.discografia');
    }
}
