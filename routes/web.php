<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArchiveController::class, 'index'])->name('archives.index.default');

Route::get('/archives/{id}/view', [ArchiveController::class, 'viewPdf'])->name('archives.view-pdf');
Route::get('/archives/{id}/download', [ArchiveController::class, 'downloadPdf'])->name('archives.download-pdf');

Route::resource("categories", CategoryController::class);
Route::resource("archives", ArchiveController::class);
Route::get('/about', [AboutController::class, 'index'])->name("about.index");
