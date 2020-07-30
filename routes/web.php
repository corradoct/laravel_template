<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials.homepage');
})->name('homepage');

Route::get('/privacy', function () {
    return view('partials.privacy');
})->name('privacy');

Route::get('/faqs', function () {
  $faqsBefore = config('faqs.faqsBefore');
  $faqsAfter = config('faqs.faqsAfter');
    return view('partials.faqs', [
      'faqsListBefore' => $faqsBefore,
      'faqsListAfter' => $faqsAfter
    ]);
})->name('faqs');
