<?php

namespace App\Repository;

use App\Models\Note;
use App\Repository\Adapter\AbstractRepository;

class NoteRepository extends AbstractRepository {

    public function __construct()
    {
        $this->model = new Note();
    }
}