<?php

namespace App\Http\Repositories;

use App\Utils\ErrorResponse;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

abstract class EloquentRepository implements EloquentRepositoryInterface
{
    protected $model;

    /**
     * @param $model
     */
    public function __construct()
    {
        $this->setModel();
    }


    /**
     * @return mixed
     */
    abstract public function getModel();
    /**
     * @param mixed $model
     */
    public function setModel(): void
    {
        $this->model = app()->make($this->getModel());
    }

    public function create(array $data)
    {
        try {
            $this->model::create($data);
        }catch (\Exception $ex){
            Session::flash('err_repo',$ex->getMessage());
            return false;
        }
        return true;
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function get($id)
    {
        $result = null;
        try {
            #$this->model::where('id',$id)->get();
            $result = $this->model::find($id);
        }catch (\Exception $ex){
            Session::flash('err_repo',$ex->getMessage());
            return $result;
        }
        return $result;
    }

    public function findDataWithCond(array $cond)
    {
        // TODO: Implement findDataWithCond() method.
    }

    public function getAll()
    {
        return $this->model::all();
    }

    public function getAllWithSimpleFilter(array $filters = [])
    {
        try {
            $query = $this->model::query();
            foreach($filters as $filter => $value){
                if(is_array($value)){
                    $query->whereIn($filter,$value);
                }else{
                    $query->where($filter,$value);
                }
            }
            return $query->get();
        }
        catch (\Exception $ex){
            Session::flash('err_repo',$ex->getMessage());
        }
        return [];
    }


}
