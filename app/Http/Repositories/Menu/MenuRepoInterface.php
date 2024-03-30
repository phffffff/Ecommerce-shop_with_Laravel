<?php

namespace App\Http\Repositories\Menu;

use App\Models\Menu;

interface MenuRepoInterface
{
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function get($id);
    public function getAll();
    public function getAllWithSimpleFilter(array $filters);
}
