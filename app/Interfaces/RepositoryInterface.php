<?php

namespace App\Interfaces;

interface RepositoryInterface
{
    public function create(array $attributes);

    public function getAllWhere($user_id);
}
