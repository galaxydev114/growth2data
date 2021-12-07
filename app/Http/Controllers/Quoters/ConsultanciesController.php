<?php

namespace App\Http\Controllers\Quoter;

use Illuminate\Http\Request;
use App\Http\Requests\ConsultanciesRequest;
use App\Http\Controllers\Controller;
use App\Models\Consultancy;

class ConsultanciesController extends Controller
{
    public function index()
    {
        return view('quoters.consultancies.index');
    }

    public function save(ConsultanciesRequest $request)
    {
        Consultancy::create($request->validated());

        return redirect()->route('messages.submit.success');
    }
}
