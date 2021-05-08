<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;


class FrontCommentController extends Controller
{
    public function store(CommentRequest $request){
        $validated = $request->validated();
        $comment = new Comment($validated);
        $comment->save();

        return back()->with('success', 'your comment under review by admin');
    }
}
