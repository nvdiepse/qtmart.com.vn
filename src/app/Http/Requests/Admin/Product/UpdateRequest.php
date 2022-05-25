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
            'code'         => 'required',
            'price'         => 'required',
            'price_entry'         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Tên sản phẩm không được để trống',
            'name.min'              => 'Tên sản phẩm ngắn',
            'name.max'              => 'Tên sản phẩm dài',
            'code.required'        => 'Mã sản phẩm không được để trống',
            'price.required'        => 'Giá sản phẩm không được để trống',
            'price_entry.required'        => 'Giá nhập sản phẩm không được để trống',
        ];
    }
}
