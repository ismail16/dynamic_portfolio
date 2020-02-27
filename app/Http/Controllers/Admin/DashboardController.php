<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Skill;

class DashboardController extends Controller
{
    public function index()
    {
    	$setting = Setting::orderBy('id','desc')->first();
    	$skills = Skill::orderBy('id','desc')->get();
        return view('admin.dashboard', compact('setting','skills'));
    }
}
