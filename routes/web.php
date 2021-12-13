<?php

use App\Static\ShowApiDocsPage;
use App\Static\ShowLandingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowLandingPage::class);
Route::get('/docs', ShowApiDocsPage::class);
