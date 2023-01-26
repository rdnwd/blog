<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:20',
            'category_id' => 'required|integer',
            'author_id' => 'required|integer|min:1',
            'preview_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'main_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
}
