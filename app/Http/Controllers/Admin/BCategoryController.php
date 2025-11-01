<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BCategory;
use App\Models\Blog;

class BCategoryController 
{
   public function index(){

        $blog_category=BCategory::all();
        return view ('admin.blog_categories.index',compact('blog_category'));
    }

    public function create(){

        $blog_category=BCategory::all();
        return view ('admin.blog_categories.create', compact('blog_category'));
    }

    public function store(Request $request){

        $request->validate([
            "name"=>'required|string',
            "description"=>'nullable|string',
        ]);

        $blog_category =new BCategory();

        $blog_category->name=$request->name;
        $blog_category->description=$request->description;
        $blog_category->status=$request->status;

        $blog_category->save();
        return redirect()->back();
    }

    public function edit($id){

        $blog_category=BCategory ::findorFail($id);
        return view('admin.blog_categories.edit',compact('blog_category'));
    }

    public function detail ($id) {
        
        $blog_category=BCategory ::findorFail($id);
        $blogs=Blog::where('category_id', $id)->get();

        return view('admin.blog_categories.detail', compact('blog_category' , 'blogs'));
    }

    public function  update (Request $request , $id){

        $blog_category=BCategory ::findorFail($id);

        $request->validate([
            "name"=>'required|string',
            "description"=>'nullable|string',
        ]);

        $blog_category->name=$request->name;
        $blog_category->description=$request->description;
        $blog_category->status=$request->status;

        $blog_category->save();
        return redirect()->route('blog_category.index');
    }

    public function delete($id){

        $blog_category=BCategory ::findorFail($id);
        $blog_category->delete();
        return redirect()->route('blog_category.index');
    }
}
