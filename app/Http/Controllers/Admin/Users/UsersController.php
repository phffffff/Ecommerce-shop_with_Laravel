<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UsersRequest;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function index()
    {
        return view('Template.Admin.Login',['title'=>'Login Admin Ecommerce Shop']);
    }
    public function store(UsersRequest $request)
    {
        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ])){
            return redirect()->route('admin');
        }
        return redirect()->back();
    }
}
