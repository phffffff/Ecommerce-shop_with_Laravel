<?php

namespace App\Http\Requests\Menu;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function configValidate(): array
    {
        return [
            'name'=>['required'],
            'description'=>['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Không được bỏ trống tên danh mục',
            'description.required'=>'Không được bỏ trống mô tả danh mục',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

}
