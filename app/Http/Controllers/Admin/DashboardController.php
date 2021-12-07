<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a dashboard
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        return view('admin.dashboard');
    }
}
