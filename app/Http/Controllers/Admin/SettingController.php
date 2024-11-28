<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use App\Models\Setting;

class SettingController extends Controller
{

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'theme_number' => 'required',
          'theme_color' => 'required',
          'footer_text' => 'required'
        ]);

        $setting = Setting::find($id);
        $image = $request->file('logo');
        $slug = Str::slug($setting->name);
        if (isset($image)){
            if ($setting->logo) {
                if (file_exists('images/logo/'.$setting->logo)){
                    unlink('images/logo/'.$setting->logo);
                }
            }
            $setting_imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/logo',$setting_imagename);
            $setting->logo = $setting_imagename;

        }
        $setting->theme_number = $request->theme_number;
        $setting->theme_color = $request->theme_color;
        $setting->footer_text = $request->footer_text;
        $setting->meta_title = $request->meta_title;
        $setting->meta_description = $request->meta_description;

        try{
            $setting->save();
            return back()->with('message', 'Setting Updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }
}
