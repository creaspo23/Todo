<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:25',
            'price'=>'required|numeric',
            'category_id'=>'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required'=>'إسم المنتج مطلوب',
            'name.max'=>'إسم المنتج اكثر من  25 حرف',
            'price.required'=>'مبلغ المنتج مطلوب',
            'price.numeric'=>'الرجاء ادخال قيمه صحيحه ارقام',
            'category_id.required'=>'رقم التصنيف مطلوب'
        ];
    }
}
