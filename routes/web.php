<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function() {
    return redirect()->route('home', ['section' => 'home']);
});
Route::get('/{section}', HomeController::class)->name('home');
