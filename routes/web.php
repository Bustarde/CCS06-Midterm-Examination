<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstFormController;

Route::get('/', [FirstFormController::class, 'First-Form']); 