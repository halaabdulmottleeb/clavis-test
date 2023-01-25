<?php

namespace App\Services;

use App\Repository\NoteRepository;

class NoteService {

    public $noteRepository;
    
    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function create($data){
        $this->noteRepository->create($data);
    }
}