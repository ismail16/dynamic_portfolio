<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


use App\Models\Education;

class EducationController extends Controller
{

    public function index()
    {
        $educations = Education::orderBy('id', 'desc')->get();
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'exam_name' => 'required',
          'exam_short_code' => 'required',
          'institution_name' => 'required',
          'passing_year' => 'required',
          'certificate_image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $education = new Education;

        $image = $request->file('certificate_image');
        $slug = str_slug($request->exam_name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/certificate_image')){
                mkdir('images/certificate_image', 777, true);
            }
            $image->move('images/certificate_image',$imagename);
            $education->certificate_image = $imagename;
        }
        $education->exam_name = $request->exam_name;
        $education->exam_short_code = $request->exam_short_code;
        $education->institution_name = $request->institution_name;
        $education->passing_year = $request->passing_year;
        $education->description = $request->description;
        $education->status = $request->status;

        try{
            $education->save();
            return redirect()->route('admin.education.index')->with('message', 'Certificate Saved Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'exam_name' => 'required',
          'exam_short_code' => 'required',
          'institution_name' => 'required',
          'passing_year' => 'required',
          'certificate_image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $image = $request->file('certificate_image');
        $slug = str_slug($request->exam_name);
        $education = Education::find($id);
        if (isset($image)){
            if ($education->certificate_image) {
                if (file_exists('images/certificate_image/'.$education->certificate_image)){
                    unlink('images/certificate_image/'.$education->certificate_image);
                }
            }
            $certificate_imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/certificate_image',$certificate_imagename);
            $education->certificate_image = $certificate_imagename;
        }

        $education->exam_name = $request->exam_name;
        $education->exam_short_code = $request->exam_short_code;
        $education->institution_name = $request->institution_name;
        $education->passing_year = $request->passing_year;
        $education->description = $request->description;
        $education->status = $request->status;

        try{
            $education->save();
            return redirect()->route('admin.education.index')->with('message', 'Certificate Updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        if ($skill->certificate) {
            if (file_exists('images/certificate_image/'.$education->certificate_image)){
                unlink('images/certificate_image/'.$education->certificate_image);
            }
        }
        $education->delete();
        return redirect()->route('admin.education.index')->with('message', 'Certificate Deleted Successfully !');
    }
}
