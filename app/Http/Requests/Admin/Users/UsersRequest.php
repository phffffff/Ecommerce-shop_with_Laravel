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
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

}
