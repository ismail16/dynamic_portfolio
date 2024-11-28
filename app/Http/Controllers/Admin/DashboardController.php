<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Scholarship;
use App\Models\Experience;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $skills = Skill::orderBy('id', 'desc')->get();
        $portfolios = Portfolio::get();
        $categories = Category::get();
        $educations = Education::get();
        $skills = Skill::get();
        $scholarships = Scholarship::get();
        $experiences = Experience::get();
        $contacts = Contact::get();
        return view('admin.dashboard', compact('setting', 'portfolios', 'categories', 'educations', 'skills', 'scholarships', 'experiences', 'contacts'));
    }
}
