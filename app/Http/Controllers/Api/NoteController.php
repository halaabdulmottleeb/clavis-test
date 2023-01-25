<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\NoteService;

class NoteController extends Controller {

    public $noteService;

    public function __construct(NoteService $noteService)
    {
        $this->noteService = $noteService;
    }



}