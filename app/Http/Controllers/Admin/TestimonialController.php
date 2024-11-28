<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{

   public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'client_name' => 'required',
          'comment' => 'required'
        ]);

        $testimonial = new Testimonial;

        $image = $request->file('image');
        $slug = Str::slug($request->client_name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/testimonial_image')){
                mkdir('images/testimonial_image', 777, true);
            }
            $image->move('images/testimonial_image',$imagename);
            $testimonial->image = $imagename;
        }
        $testimonial->client_name = $request->client_name;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;

        try{
            $testimonial->save();
            return redirect()->route('admin.testimonial.index')->with('message', 'Testimonial Saved Successfully !');
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'client_name' => 'required',
          'comment' => 'required'
        ]);

        $testimonial = Testimonial::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (file_exists('images/testimonial_image'.$testimonial->certificate)){
                unlink('images/testimonial_image'.$testimonial->certificate);
            }
            $image->move('images/testimonial_image',$imagename);
            $testimonial->image = $imagename;
        }
        $testimonial->client_name = $request->client_name;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;

        try{
            $testimonial->save();
            return redirect()->route('admin.testimonial.index')->with('message', 'Testimonial updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if (file_exists('images/testimonial_image/'.$testimonial->image)){
            unlink('images/testimonial_image/'.$testimonial->image);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('message', 'Testimonial Deleted Successfully !');
    }
}
