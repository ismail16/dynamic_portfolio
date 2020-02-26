<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class PagesController extends Controller
{

    public function index()
    {
    	$setting = Setting::first();
        return view('frontend.pages.index',compact('setting'));
    }
   
}
