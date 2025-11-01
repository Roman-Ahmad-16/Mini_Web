<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Blog;
use App\Models\BCategory;

class BlogController 
{
    public function index(){

        $blogs=Blog::all();
        return view ('admin.blogs.index',compact('blogs'));
    }

    public function create(){

        $blog_category=BCategory::all();
        return view ('admin.blogs.create', compact('blog_category'));
    }

    public function store(Request $request){

        $request->validate([
            "title"=>'required|string',
            "description"=>'nullable|string',
            "image"=>'nullable|mimes:jpg,jpeg,png,webp|max:4000',

        ]);

        $blog =new Blog();

        if($request->hasFile('image')){

            $image=$request->file('image');
            $extension=$image->getClientOriginalExtension();
            $store=time().rand().'.'.$extension;
            $image->move(public_path('uploads/blog') , $store);
            $blog->image= 'uploads/blog/' . $store;
        };


        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->status=$request->status;
        $blog->category_id=$request->category_id;

        $blog->save();
        return redirect()->route('blog.index');
    }

    public function edit($id){

        $blog=Blog ::findorFail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function  update (Request $request , $id){

        $blog=Blog ::findorFail($id);

        $request->validate([
            "title"=>'required|string',
            "description"=>'nullable|string',
            "image"=>'nullable|mimes:jpg,jpeg,png,webp|max:4000',
        ]);

        
        if($request->hasFile('image')){

            if($blog->image && File::exists(public_path($blog->image))){
                File::delete(public_path($blog->image));
            }

            $image=$request->file('image');
            $extension=$image->getClientOriginalExtension();
            $store=time().rand().'.'.$extension;
            $image->move(public_path('uploads/blog') , $store);
            $blog->image= 'uploads/blog/' . $store;
        };



        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->status=$request->status;

        $blog->save();
        return redirect()->route('blog.index');
    }

    public function delete($id){

        $blog=Blog ::findorFail($id);

        if($blog->image && File::exists(public_path($blog->image))){
            File::delete(public_path($blog->image));
        }

        $blog->delete();

        return redirect()->route('blog.index');
    }
}
