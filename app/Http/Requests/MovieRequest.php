<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|max:11',
            'comment' => 'max:36'
        ];
    }
    
    public function messages()
    {
        return [
            'url.required' => 'URLを入力してください',
            'comment.max' => 'コメントは36字以内で入力してください'
            ];
    }
}
