<?php

namespace App\Http\Requests\Admin\Article;

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
            'pa_name'          => 'required|max:190|min:3',
        ];
    }

    public function messages()
    {
        return [
            'pa_name.required'         => 'Tên article không được để trống',
            'pa_name.min'              => 'Tên article ngắn',
            'pa_name.max'              => 'Tên article dài',
        ];
    }
}
