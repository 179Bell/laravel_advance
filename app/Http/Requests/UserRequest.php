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
            'channel.required' => 'チャンネル名を入力してください',
            'name.required' => '名前を入力してください',
            'channel.max' => '15字内で入力してください', 
            'name.max' => '15字内で入力してください',  
            ];
    }
}
