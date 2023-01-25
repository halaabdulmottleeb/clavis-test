<?php

namespace App\Repository;

use App\Repository\Adapter\AbstractRepository;
use App\Models\User;

class UserRepository extends AbstractRepository {

    public function __construct()
    {
        $this->model = new User();
    }
}