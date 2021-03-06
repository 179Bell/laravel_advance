<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'channel' => 'required|max:15',
            'name' => 'required|max:15',
        ];
    }
    
    public function messages()
    {
        return [
            'channel.required' => ':attributeを入力してください',
            'name.required' => ':attributeを入力してください',
            'channel.max' => ':max字以内で入力してください', 
            'name.max' => ':max字以内で入力してください',  
            ];
    }
    
    public function attributes()
    {
        return [
            'channel' => 'チャンネル名',
            'name' => '名前',
            ];
    }
}
