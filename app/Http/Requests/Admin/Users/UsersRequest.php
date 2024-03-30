<?php

namespace App\Http\Requests\Admin\Users;

use App\Http\Requests\BaseRequest;

class UsersRequest extends BaseRequest
{
    public function configValidate():array
    {
        return [
            'email'=>['required','email'],
            'password'=>['required','string'],
        ];
    }

    public function messages():array
    {
        return [
            'email.required'=>'Không được bỏ trống email',
            'password.required'=>'Không được bỏ trống password',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

}
