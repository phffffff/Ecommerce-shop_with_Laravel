<?php

namespace App\Http\Repositories\Menu;

use App\Http\Repositories\EloquentRepository;
use App\Models\Menu;

class MenuRepo extends EloquentRepository implements MenuRepoInterface
{
    public function getModel()
    {
        return Menu::class;
    }
}
