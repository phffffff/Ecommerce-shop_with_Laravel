<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('Template.Admin.Page.table',[
            'title'=>'Dashboard Admin Ecommerce Shop',
            'name'=>"Sản phẩm",
        ]);
    }
}
