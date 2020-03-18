<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'phone_number' => 'required|regex:/[0-9]{10}/',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:6|max:20',
        ];
    }
    public function messages()
    {
        return [
            'full_name.required' => 'Bạn cần nhập tên!',
            'full_name.regex' => 'Bạn cần nhập chữ!',
            'email.required' => 'Bạn cần nhập Email!',
            'email.email' => 'Sai định dạng Email',
            'email.unique'  => 'Email đã tồn tại',
            'address.required' => 'Bạn cần nhập địa chỉ!',
            'phone_number.required' => 'Bạn cần nhập số điện thoại!',
            'phone_number.regex' => 'Số điện thoại phải có 10 chữ số!',
            'username.required' => 'Bạn cần nhập tên đăng nhập!',
            'username.unique' => 'Tên đăng nhập đã tồn tại!',
            'password.required' => 'Bạn cần nhập password',
            'password.min' => 'Mật khẩu ít nhất là 6 ký tự!',
            'password.max' => 'Mật khẩu tối đa là 20 ký tự!',
            'password.confirmed' => 'Mật khẩu xác nhận không đúng!',
        ];
    }
}
