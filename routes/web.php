<?php

use App\Static\ShowApiDocsPage;
use App\Static\ShowBrowsePage;
use App\Static\ShowChapterPage;
use App\Static\ShowCodePage;
use App\Static\ShowLandingPage;
use App\Static\ShowSubChapterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowLandingPage::class);
Route::get('/docs', ShowApiDocsPage::class);

Route::get('/browse', ShowBrowsePage::class);
Route::get('/browse/{chapter}', ShowChapterPage::class);
Route::get('/browse/{chapter}/{subchapter}/', ShowSubChapterPage::class);
Route::get('/browse/{chapter}/{subchapter}/{code}', ShowCodePage::class);
