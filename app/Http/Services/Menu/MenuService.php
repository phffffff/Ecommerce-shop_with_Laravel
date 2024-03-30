<?php

namespace App\Http\Services\Menu;

use App\Http\Repositories\Menu\MenuRepoInterface;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService implements MenuServiceInterface
{
    protected $repository;

    public function __construct(MenuRepoInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create($request)
    {
        $data = [
            'name'=>(string)$request->input('name'),
            'parent_id'=>(int)$request->input('parent_id'),
            'description'=>(string)$request->input('description'),
            'slug'=>Str::slug($request->input('name'),'-'),
            'active'=>(bool)$request->input('active'),
        ];

        $result = $this->repository->create($data);

        return $result;
    }

    public function update($request)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function list()
    {
        return $this->repository->getAll();
    }

    public function listDataWithFilter(array $filters = [])
    {
        if(count($filters) == 0){
            return $this->list();
        }
        return $this->repository->getAllWithSimpleFilter($filters);
    }

    public function find($id)
    {
        return $this->repository->get((int)$id);
    }

    public function getNameById($id)
    {
        $result = $this->repository->get((int)$id);
        if (!$result){
            Session::flash('err_service','Không tìm thấy Menu có Id là'.$id);
            return "";
        }
        return $result->name;
    }

}
