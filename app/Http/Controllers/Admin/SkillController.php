<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('id', 'desc')->get();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'percentage' => 'required'
        ]);

        $skill = new Skill;

        $image = $request->file('certificate');
        $slug = str_slug($request->name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/skill')){
                mkdir('images/skill', 777, true);
            }
            $image->move('images/skill',$imagename);
            $skill->certificate = $imagename;
        }
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->description = $request->description;
        $skill->status = $request->status;

        try{
            $skill->save();
            return redirect()->route('admin.skill.index')->with('message', 'skill Saved Successfully !');
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
        $skill = Skill::find($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'percentage' => 'required'
        ]);

        $skill = Skill::find($id);
        $image = $request->file('certificate');
        $slug = str_slug($request->name);
        if (isset($image)){
            if ($skill->certificate) {
                if (file_exists('images/skill/'.$skill->certificate)){
                    unlink('images/skill/'.$skill->certificate);
                }
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/skill',$imagename);
            $skill->certificate = $imagename;
        }
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->description = $request->description;
        $skill->status = $request->status;

        try{
            $skill->save();
            return redirect()->route('admin.skill.index')->with('message', 'skill updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (file_exists('images/skill/'.$skill->certificate)){
            unlink('images/skill/'.$skill->certificate);
        }
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('message', 'Certificate Deleted Successfully !');
    }
}
