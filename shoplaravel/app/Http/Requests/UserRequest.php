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
            'txtUser' => 'required',
            'txtPass' => 'required',
            'txtRePass' => 'required|same:txtPass',
            'txtEmail' => 'required|unique:users,email'
        ];
    }
    public function messages(){
        return [
            'txtUser.required'  => 'Bạn vui lòng nhập vào tên',
            'txtPass.required'  => 'Bạn vui lòng nhập vào password',
            'txtRePass.same'  => 'Bạn phải nhập lại đúng password',
            'txtEmail.required'  => 'Bạn vui lòng nhập vào email ',
            'txtEmail.unique'  => 'Email đã có người dùng'
        ];
    }
}
