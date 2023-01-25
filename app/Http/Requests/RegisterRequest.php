<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "user_name"   => "required|unique:users|string|min:3",
            "email"    => "required|unique:users|email",
            'phone'    => "required|string",
            "password" => "required|min:8",
            "profile_picture" => "sometimes|file"
        ];
    }
}
