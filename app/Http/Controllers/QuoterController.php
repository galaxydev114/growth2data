<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoterController extends Controller
{
    public function consultancyService()
    {
        return view('quoter.consultancy_service');
    }
}
