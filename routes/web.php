<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\HomeController;

Route::get('/', function() {
    return redirect()->route('home', ['section' => 'home']);
});
Route::get('/login', function() {
    return view('livewire.pages.login');
});
Route::get('/{section}', HomeController::class)->name('home');
