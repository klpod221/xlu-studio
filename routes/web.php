<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

foreach (File::allFiles(__DIR__ . '/web') as $routeFile) {
    require $routeFile->getPathname();
}

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');
});
