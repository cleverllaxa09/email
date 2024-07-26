<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return 'main Page';
});
Route::get('/xxx', function () {
    return 'HeeLLo';
})->name('hello');
Route::get('/greet/{name}', function ($name) {
    return 'Hello '. $name .' !';
});
Route::get('/hallo', function () {
    return redirect()->route('hello');
});
Route::fallback(function () {

    return 'wala kang route';
}

);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('send-email-pdf', [PDFController::class, 'index']);
