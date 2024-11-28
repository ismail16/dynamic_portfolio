<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.profile.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'title' => 'required',
          'email' => 'required',
          'my_self' => 'required'
        ]);

        $setting = Setting::find($id);
        $image1 = $request->file('image1');
        $slug = Str::slug($setting->name);

        if (isset($image1)){
            if ($setting->image1) {
                if (file_exists('images/profile/'.$setting->image1) && $setting->image1 != 'default_profile.png'){
                    unlink('images/profile/'.$setting->image1);
                }
            }
            $setting_image1name = $slug.'-'.uniqid().'.'.$image1->getClientOriginalExtension();
            $image1->move('images/profile',$setting_image1name);
            $setting->image1 = $setting_image1name;
        }

        $image2 = $request->file('image2');
        $slug = Str::slug($setting->name);
        if (isset($image2)){
            if ($setting->image2) {
                if (file_exists('images/profile/'.$setting->image2) && $setting->image2 != 'default_profile.png'){
                    unlink('images/profile/'.$setting->image2);
                }
            }
            $setting_image2name = $slug.'-'.uniqid().'.'.$image2->getClientOriginalExtension();
            $image2->move('images/profile',$setting_image2name);
            $setting->image2 = $setting_image2name;
        }

        $resume_file = $request->file('resume_file');
        $slug = Str::slug($setting->name);
        
        if (isset($resume_file)){
            if ($setting->resume_file) {
                if (file_exists('/profile_resume'.$setting->resume_file)){
                    unlink('/profile_resume'.$setting->resume_file);
                }
            }
            $setting_resume_filename = $slug.'-'.'resume'.'-'.uniqid().'.'.$resume_file->getClientOriginalExtension();
            $resume_file->move('images/profile',$setting_resume_filename);
            $setting->resume_file = $setting_resume_filename;
        }
        $setting->name = $request->name;
        $setting->title = $request->title;
        $setting->age = $request->age;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->website = $request->website;
        $setting->my_self = $request->my_self;

        try{
            $setting->save();
            return back()->with('message', 'Profile Updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        //
    }
}
