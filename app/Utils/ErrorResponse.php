<?php

namespace App\Utils;

use Illuminate\Support\Facades\Session;

class ErrorResponse
{
    public static function errRes()
    {
        if(Session::has('err_service')){
            return [
                'msg'=>"Something error with server",
                'error'=>Session::get('err_service'),
                'key'=>'ERROR_SERVICE',
                'status_code'=>400
            ];
        }
        if(Session::has('err_repo')){
            return [
                'msg'=>"Something error with database",
                'error'=>Session::get('err_repo'),
                'key'=>'ERROR_REPOSITORY',
                'status_code'=>400
            ];
        }
        return [];
    }
}
