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
}
