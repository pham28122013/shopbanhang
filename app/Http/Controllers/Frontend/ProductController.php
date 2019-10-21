<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
     /**
     * Show the profile for the given accessories.
     *
     * @param  int  $id
     * @return View
     */
    public function accessories($id)
    {
        return view('pages.detail-accessories');
    }
}
