<?php

namespace App\Http\Requests\Admin\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'mn.name'          => 'required|max:190|min:3',
        ];
    }

    public function messages()
    {
        return [
            'mn.name.required'         => 'Tên menu không được để trống',
            'mn.name.min'              => 'Tên menu ngắn',
            'mn.name.max'              => 'Tên menu dài',
        ];
    }
}
