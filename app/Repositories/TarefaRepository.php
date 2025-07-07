<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Models\Tarefa;

class TarefaRepository implements RepositoryInterface
{

    public function create(array $attributes)
    {
        return Tarefa::create($attributes);
    }

    public function getAllWhere($user_id)
    {
        return Tarefa::where('user_id', $user_id)->paginate(10);
    }
}
