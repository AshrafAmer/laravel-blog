<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Article Title is required',
            'body.required' => 'Article Body cannot be blank',
        ];
    }
}
