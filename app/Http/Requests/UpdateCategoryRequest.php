<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name,'.$this->category->id,
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập tên!',
            'name.unique' => 'Tên danh mục đã tồn tại!',
            'description.required' => 'Bạn phải nhập mô tả!',
        ];
    }
}
