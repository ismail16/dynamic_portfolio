<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        // $portfolios = Portfolio::orderBy('id', 'desc')->get();
        // return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // return view('admin.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //   'title' => 'required',
        //   'category_id' => 'required'
        // ]);

        // $portfolio = new Portfolio;

        // $image = $request->file('portfolio_image');
        // $slug = str_slug($request->title);
        // if (isset($image)){
        //     $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     if (!file_exists('images/portfolio_image')){
        //         mkdir('images/portfolio_image', 777, true);
        //     }
        //     $image->move('images/portfolio_image',$imagename);
        //     $portfolio->portfolio_image = $imagename;
        // }
        // $portfolio->category_id = $request->category_id;
        // $portfolio->title = $request->title;
        // $portfolio->link = $request->link;
        // $portfolio->description = $request->description;
        // $portfolio->status = $request->status;

        // try{
        //     $portfolio->save();
        //     return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio Saved Successfully !');
        // }catch (\Exception $exception){
        //     return back()->with('danger', 'Something went wrong !');
        // }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //   'title' => 'required',
        //   'category_id' => 'required'
        // ]);

        // $image = $request->file('portfolio_image');
        // $slug = str_slug($request->title);
        // $portfolio = Portfolio::find($id);
        // if (isset($image)){
        //     if (file_exists('images/portfolio_image/'.$portfolio->portfolio_image)){
        //         unlink('images/portfolio_image/'.$portfolio->portfolio_image);
        //     }
        //     $portfolio_imagename = $slug.'-'.uniqid().'.'.$portfolio_image->getClientOriginalExtension();

        //     $portfolio_image->move('images/portfolio_image',$portfolio_imagename);
        // }else{
        //     $portfolio_imagename = $portfolio->portfolio_image;
        // }

        // $portfolio->category_id = $request->category_id;
        // $portfolio->title = $request->title;
        // $portfolio->link = $request->link;
        // $portfolio->description = $request->description;
        // $portfolio->status = $request->status;

        // try{
        //     $portfolio->save();
        //     return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio Updated Successfully !');
        // }catch (\Exception $exception){
        //     return back()->with('danger', 'Something went wrong !');
        // }
    }

    public function destroy($id)
    {
     
    }
}
