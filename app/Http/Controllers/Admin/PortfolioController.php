<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Portfolio;

class PortfolioController extends Controller
{

//     category_id
// title
// portfolio_image
// description
// link
// status


     public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
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

        $portfolio = new Portfolio;

        $image = $request->file('certificate_image');
        $slug = str_slug($request->exam_name);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/certificate_image')){
                mkdir('images/certificate_image', 777, true);
            }
            $image->move('images/certificate_image',$imagename);
            $portfolio->certificate_image = $imagename;
        }
        $portfolio->exam_name = $request->exam_name;
        $portfolio->exam_short_code = $request->exam_short_code;
        $portfolio->institution_name = $request->institution_name;
        $portfolio->passing_year = $request->passing_year;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        try{
            $portfolio->save();
            return back()->with('success', 'Certificate Saved Successfully !');
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
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit', compact('portfolio'));
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
        $portfolio = Portfolio::find($id);
        if (isset($image)){
            if (file_exists('images/certificate_image/'.$portfolio->certificate_image)){
                unlink('images/certificate_image/'.$portfolio->certificate_image);
            }
            $certificate_imagename = $slug.'-'.uniqid().'.'.$certificate_image->getClientOriginalExtension();

            $certificate_image->move('images/certificate_image',$certificate_imagename);
        }else{
            $certificate_imagename = $portfolio->certificate_image;
        }

        $portfolio->exam_name = $request->exam_name;
        $portfolio->exam_short_code = $request->exam_short_code;
        $portfolio->institution_name = $request->institution_name;
        $portfolio->passing_year = $request->passing_year;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        try{
            $portfolio->save();
            return back()->with('success', 'Certificate Saved Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if (file_exists('images/certificate_image/'.$portfolio->certificate_image)){
            unlink('images/certificate_image/'.$portfolio->certificate_image);
        }
        $portfolio->delete();
        return back()->with('success', 'Certificate Deleted Successfully !');
    }
}
