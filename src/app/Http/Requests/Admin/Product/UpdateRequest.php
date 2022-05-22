<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'          => 'required|max:190|min:3',
            'price'         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Tên sản phẩm không được để trống',
            'name.min'              => 'Tên sản phẩm ngắn',
            'name.max'              => 'Tên sản phẩm dài',
            'price.required'        => 'Giá sản phẩm không được để trống',
        ];
    }
}
