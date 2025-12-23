<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Pagina statica "Team".
     */
    public function __invoke()
    {
        return view('General.team');
    }
}
