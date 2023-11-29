<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('homepage');
Route::get('/àbout/pages/meeting', [App\Http\Controllers\WebsiteController::class, 'aboutMeeting'])->name('about.meeting');
Route::get('/àbout/pages/membership', [App\Http\Controllers\WebsiteController::class, 'aboutMembership'])->name('about.membership');
Route::get('/àbout/pages/right-menber', [App\Http\Controllers\WebsiteController::class, 'aboutRightMember'])->name('about.right-member');
Route::get('/àbout/pages/responsibility-of-member', [App\Http\Controllers\WebsiteController::class, 'aboutResponsibilityOfMember'])->name('about.responsibility-of-member');

