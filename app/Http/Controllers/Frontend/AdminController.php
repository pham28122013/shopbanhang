<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the profile for the given admin.
     *
     * @return View
     */
    public function index()
    {
        return view('admin.index');
    }
}
