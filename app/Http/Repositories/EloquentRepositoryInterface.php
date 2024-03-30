<?php

namespace App\Http\Repositories;

interface EloquentRepositoryInterface
{
    public function create(array $data);
    public function update($id,array $data);
    public function delete($id);
    public function get($id);
    public function getAll();
    public function getAllWithSimpleFilter(array $filters);
    public function findDataWithCond(array $cond);
}
