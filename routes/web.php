<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return 'main Page';
});
Route::get('/hello', function () {
    return 'HeeLLo';
})->name('hello');
Route::get('/greet/{name}', function ($name) {
    return 'Hello '. $name .' !';
});
Route::get('/hallo', function () {
    return redirect('/hello');
});


Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('send-email-pdf', [PDFController::class, 'index']);
