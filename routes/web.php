<?php

use App\Http\Controllers\User\HomepageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomepageController::class,'home']);
