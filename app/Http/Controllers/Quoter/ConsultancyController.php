<?php

namespace App\Http\Controllers\Quoter;

use Illuminate\Http\Request;
use App\Http\Requests\ConsultancyRequest;
use App\Http\Controllers\Controller;
use App\Models\Consultancy;

class ConsultancyController extends Controller
{
    public function index()
    {
        return view('quoter.consultancy.index');
    }

    public function save(ConsultancyRequest $request)
    {
        Consultancy::create($request->validated());
        return redirect()->route('messages.submit.success');
    }
}
