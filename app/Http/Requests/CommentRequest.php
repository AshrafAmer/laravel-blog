<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'article_id' => 'required',
            'comment' => 'required|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'article_id.required' => 'Error with article data, try again later',
            'comment.required' => 'Comment cannot be blank, it is required',
        ];
    }
}
