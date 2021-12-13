<?php

use App\Codes\Actions\ListCodes;
use App\Codes\Actions\ShowCode;
use Illuminate\Support\Facades\Route;

Route::get('codes', ListCodes::class);
Route::get('codes/{uuid}', ShowCode::class);
