<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StudioController extends Controller
{
    public function __invoke()
    {
        return view('General.studios');
    }
}
