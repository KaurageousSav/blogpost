<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blogs;
use App\Models\comments;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class CommentsController extends Controller
{
    use RefreshDatabase;
    // public function show(comments $comments)
    // {
    //     return view('comments.show');
    // }


    public function store(blogs $blogs, CommentsRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $comment = new comments();

        $comment->blog_id = $blogs->id;
        $comment->comment = $data['comment'];
        $comment->user_id = auth()->User()->id;
        $comment->save();
        return back();


        // $request->validate([
        //     'comment'=>'required',
        // ]);
        // // $data = $request->validate();
        // // $comment = new Comments();

        // // $comment->blog_id = $blogs->id;
        // comments::create([
        //     'comment'=>$request->input('comment'),
        //     'blog_id'=>$blogs->id,
        //     'user_id'=>auth()->User()->id,
        // ]);

        // return redirect('/blogs')
        //   ->with('message','Your Comment has been added');

    }
}
