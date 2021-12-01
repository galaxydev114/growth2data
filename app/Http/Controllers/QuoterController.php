<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuoterRequest;

class QuoterController extends Controller
{
    public function consultancyService(QuoterRequest $request)
    {
        if ($request->isMethod('post')) {
        }
        return view('quoter.consultancy_service', $request->all());
    }
}
