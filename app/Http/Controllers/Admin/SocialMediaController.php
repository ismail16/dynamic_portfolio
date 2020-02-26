<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SocialMediaController extends Controller
{
     public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
      
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.social_media.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;
        $setting->twitter = $request->twitter;
        $setting->linkedIn = $request->linkedIn;
        $setting->skype = $request->skype;
        try{
            $setting->save();
            return back()->with('message', 'Social Media Updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
     
    }
}
