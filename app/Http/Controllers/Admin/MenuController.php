<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function create()
    {
        return view('Template.Admin.Page.Menu.form',['title'=>'Thêm danh mục']);
    }
}
