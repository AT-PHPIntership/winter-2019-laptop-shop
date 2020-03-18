<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|unique:products,name,'.$this->product->id,
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập tên!',
            'name.unique' => 'Tên sản phẩm đã tồn tại!',
            'description.required' => 'Bạn phải nhập mô tả!',
            'quantity.required' => 'Bạn phải nhập số lượng!',
            'quantity.numeric' => 'Bạn phải nhập số!',
            'price.required' => 'Bạn phải nhập giá!',
            'price.numeric' => 'Bạn phải nhập số!',
        ];
    }
}
