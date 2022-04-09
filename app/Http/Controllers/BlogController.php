<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\Users;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\comments;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blogs::all();
        return view('blogs.index', ['blogs'=>$blogs]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    // public function show(blogs $blogs):View{
    //     return view('blogs.show',[
    //         'blogs' =>$blogs,
    //         'comments'=>$blogs->comments()
    //     ]);
    // }

    public function show(blogs $blogs):View{
        return view('blogs.show',[
            'content'=>$blogs->content,
            'comments'=>$blogs->comments()->paginate(5)
        ]);
    }

    // public function show(blogs $blogs)
    // {
    //     return view('blogs.show');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required',
        ]);

        Blogs::create([
            'content'=>$request->input('content'),
            'user_id'=>auth()->User()->id
        ]);
        print('Print from blogconrtoller');

        return redirect('/blogs')
          ->with('message','Your blog has been added');
    }
}
