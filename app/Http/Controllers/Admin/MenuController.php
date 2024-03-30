<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuRequest;
use App\Http\Services\Menu\MenuServiceInterface;
use Illuminate\Support\Facades\Session;
use App\Utils\ErrorResponse;



class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuServiceInterface $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index()
    {
        $convIdToName = function ($id){
            return $this->menuService->getNameById($id);
        };
        return view('Template.Admin.Page.Menu.index',[
            'title'=>'Dashboard Admin Ecommerce Shop',
            'name'=>"Menu",
            'menus'=>$this->menuService->listDataWithFilter(),
            'convIdToName'=>$convIdToName,
        ]);
    }
    public function create()
    {
        return view('Template.Admin.Page.Menu.form',[
            'title'=>'Thêm danh mục',
            'name'=>'danh mục',
            'task'=>'Thêm danh mục',
            'menus'=>$this->menuService->listDataWithFilter(['parent_id'=>0]),
        ]);
    }
    public function store(MenuRequest $request)
    {
        $result = $this->menuService->create($request);

        if (!$result){
            if(Session::has('err_service') || Session::has('err_repo')){
                Session::flash('err',ErrorResponse::errRes());
            }
            return redirect()->back();
        }

        Session::flash('success','Thêm Menu thành công');
        return redirect()->back();
    }
}
