<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('id', 'desc')->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'company' => 'required',
          'job_title' => 'required',
          'start_at_date' => 'required',
        ]);
        $experience = new Experience;
        $experience->company = $request->company;
        $experience->job_title = $request->job_title;
        $experience->start_at_date = $request->start_at_date;
        $experience->start_at_date = $request->start_at_date;
        $experience->end_at_date = $request->end_at_date;
        $experience->job_description = $request->job_description;
        $experience->status = $request->status;
        try{
            $experience->save();
            return redirect()->route('admin.experience.index')->with('message', 'Experience Saved Successfully !');
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
        $experience = Experience::find($id);
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'company' => 'required',
          'job_title' => 'required',
          'start_at_date' => 'required',
        ]);
        $experience = Experience::find($id);
        $experience->company = $request->company;
        $experience->job_title = $request->job_title;
        $experience->start_at_date = $request->start_at_date;
        $experience->start_at_date = $request->start_at_date;
        $experience->end_at_date = $request->end_at_date;
        $experience->job_description = $request->job_description;
        $experience->status = $request->status;
        try{
            $experience->save();
            return redirect()->route('admin.experience.index')->with('message', 'Experience Saved Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('admin.experience.index')->with('message', 'Experience Deleted Successfully !');
    }
}
