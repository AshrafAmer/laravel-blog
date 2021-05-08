<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data['comments'] = Comment::where('active', 0)->paginate(10);
        return view('admin.comments.index')->with($data);
    }


    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', ['comment' => $comment]);
    }


    public function update(Request $request, Comment $comment)
    {
        $comment->active = 1;
        $comment->approved_by = auth()->user()->id;
        $comment->save();

        return back()->with('success', 'Comment Approved Successfully..');
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment Removed Successfully..');
    }
}
