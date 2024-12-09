<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\NodeController;

Route::get("/", NodeController::class, "index")->name(note.index);


