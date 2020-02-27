<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    public function index()
    {
        $scholarships = Scholarship::orderBy('id', 'desc')->get();
        return view('admin.scholarship.index', compact('scholarships'));
    }

    public function create()
    {
        return view('admin.scholarship.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'title' => 'required',
          'institution' => 'required',
          'win_year' => 'required',
          'certificate' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $scholarship = new Scholarship;

        $image = $request->file('certificate');
        $slug = str_slug($request->name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/scholarship_image')){
                mkdir('images/scholarship_image', 777, true);
            }
            $image->move('images/scholarship_image',$imagename);
            $scholarship->certificate = $imagename;
        }
        $scholarship->name = $request->name;
        $scholarship->title = $request->title;
        $scholarship->institution = $request->institution;
        $scholarship->win_year = $request->win_year;
        $scholarship->description = $request->description;
        $scholarship->status = $request->status;

        try{
            $scholarship->save();
            return redirect()->route('admin.scholarship-or-award.index')->with('message', 'Scholarship Saved Successfully !');
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
        $scholarship = Scholarship::find($id);
        return view('admin.scholarship.edit', compact('scholarship'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'title' => 'required',
          'institution' => 'required',
          'win_year' => 'required',
          'certificate' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $scholarship = Scholarship::find($id);
        $image = $request->file('certificate');
        $slug = str_slug($request->name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (file_exists('images/scholarship_image'.$scholarship->certificate)){
                unlink('images/scholarship_image'.$scholarship->certificate);
            }
            $image->move('images/scholarship_image',$imagename);
            $scholarship->certificate = $imagename;
        }
        $scholarship->name = $request->name;
        $scholarship->title = $request->title;
        $scholarship->institution = $request->institution;
        $scholarship->win_year = $request->win_year;
        $scholarship->description = $request->description;
        $scholarship->status = $request->status;

        try{
            $scholarship->save();
            return redirect()->route('admin.scholarship-or-award.index')->with('message', 'Scholarship updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $scholarship = Scholarship::find($id);
        if (file_exists('images/scholarship_image/'.$scholarship->certificate)){
            unlink('images/scholarship_image/'.$scholarship->certificate);
        }
        $scholarship->delete();
        return redirect()->route('admin.scholarship-or-award.index')->with('message', 'Certificate Deleted Successfully !');
    }
}
