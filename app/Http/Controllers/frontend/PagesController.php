<?php

namespace App\Http\Controllers\frontend;

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
use App\Models\Testimonial;

class PagesController extends Controller
{

    public function index()
    {
    	$setting = Setting::first();
    	$portfolios = Portfolio::orderBy('id', 'desc')->where('status', 1)->get();
    	$categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
    	$educations = Education::orderBy('id', 'desc')->where('status', 1)->get();
    	$skills = Skill::orderBy('id', 'desc')->where('status', 1)->get();
    	$scholarships = Scholarship::orderBy('id', 'desc')->where('status', 1)->get();
        $experiences = Experience::orderBy('id', 'desc')->where('status', 1)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->where('status', 1)->get();

        return view('frontend.pages.index',compact('setting','portfolios','categories','educations','skills','scholarships','experiences','testimonials'));
    }

    public function contact_post(Request $request){

        
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        try {
            $contact->save();
            return response()->json(['success' => 'Thank For Contact with Me. I will responce soon !'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 404);
        }
    }

    public function documentation()
    {
        return view('documentation.index');
    }
   
}
