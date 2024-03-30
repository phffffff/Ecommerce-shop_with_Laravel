<?php

namespace App\Http\Services\Menu;
interface MenuServiceInterface
{
    public function create($request);
    public function update($request);
    public function delete($id);
    public function list();
    public function listDataWithFilter(array $filters = []);
    public function find($id);
    public function getNameById($id);
}
