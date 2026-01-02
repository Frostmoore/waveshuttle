<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Pagina statica "Booking".
     * In futuro qui embedderai il webform esterno.
     */
    public function __invoke()
    {
        return view('General.booking');
    }
}
