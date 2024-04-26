<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisteredUserRequest extends FormRequest
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
            'email'=>'required|string|email',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return[
            'email.required'=>'メールアドレスを入力してください',
            'password'=>'パスワードを入力してください',
            'email.email'=>'メールアドレスは「ユーサー名@ドメイン」形式で入力してください'
        ];
    }
}
