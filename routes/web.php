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
Route::get('/àbout/pages/introduction', [App\Http\Controllers\WebsiteController::class, 'aboutIntroduction'])->name('about.introduction');
Route::get('/àbout/pages/mandate', [App\Http\Controllers\WebsiteController::class, 'aboutMandate'])->name('about.mandate');
Route::get('/àbout/pages/governance', [App\Http\Controllers\WebsiteController::class, 'aboutGovernance'])->name('about.governance');
Route::get('/àbout/pages/role-and-responsibility', [App\Http\Controllers\WebsiteController::class, 'aboutRoleResponsibility'])->name('about.role-and-responsibility');
Route::get('/àbout/pages/core-principle', [App\Http\Controllers\WebsiteController::class, 'aboutCorePrinciple'])->name('about.core-principle');
Route::get('/àbout/pages/structure', [App\Http\Controllers\WebsiteController::class, 'aboutStructure'])->name('about.structure');
Route::get('/àbout/pages/office-bearers', [App\Http\Controllers\WebsiteController::class, 'aboutOfficeBearers'])->name('about.office-bearers');
Route::get('/àbout/pages/secretariat', [App\Http\Controllers\WebsiteController::class, 'aboutSecretariat'])->name('about.secretariat');
Route::get('/àbout/pages/membership', [App\Http\Controllers\WebsiteController::class, 'aboutMembership'])->name('about.membership');
Route::get('/àbout/pages/right-menber', [App\Http\Controllers\WebsiteController::class, 'aboutRightMember'])->name('about.right-member');
Route::get('/àbout/pages/responsibility-of-member', [App\Http\Controllers\WebsiteController::class, 'aboutResponsibilityOfMember'])->name('about.responsibility-of-member');
Route::get('committess/oversight/member-list', [App\Http\Controllers\WebsiteController::class, 'committessMemberList'])->name('committess.member-list');
Route::get('committess/oversight/committess.term-of-reference', [App\Http\Controllers\WebsiteController::class, 'committessTermOfReference'])->name('committess.term-of-reference');
Route::get('document/ccc-document/ccc-oversight-plan', [App\Http\Controllers\WebsiteController::class, 'documentOversight'])->name('document.ccc-oversight-plan');
Route::get('document/ccc-document/ccc-governance-manual-25072019vh-9aug2019', [App\Http\Controllers\WebsiteController::class, 'documentGovernance'])->name('document.ccc-governance');
Route::get('document/ccc-document/other', [App\Http\Controllers\WebsiteController::class, 'documentOther'])->name('document.other');
Route::get('document/meeting-minute/ccc-oc', [App\Http\Controllers\WebsiteController::class, 'documentCccOc'])->name('document.ccc-oc');
Route::get('document/meeting-minute/ccc', [App\Http\Controllers\WebsiteController::class, 'documentCcc'])->name('document.ccc');
Route::get('document/report/ccc-oc-oversight-visit', [App\Http\Controllers\WebsiteController::class, 'documentCccOcOversight'])->name('document.ccc-oc-oversight');
Route::get('document/report/ccc-retreat-reports', [App\Http\Controllers\WebsiteController::class, 'documentCccRetreatReport'])->name('document.ccc-retreat-report');

