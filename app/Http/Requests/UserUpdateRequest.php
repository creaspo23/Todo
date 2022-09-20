<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'sometimes|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'إسم المستخدم مطلوب',
            'email.required'=>'البريد الإلكتروني مطلوب',
            'email.email'=> 'الرجاء ادخال بريد صحيح',
            'password.min'=>'الحد الأدني لكلمه المرور 8',
            'password.confirmed'=>'كلمه المرور يجب ان تكون مطابقه',
        ];
    }
}
