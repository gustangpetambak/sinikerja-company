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

Route::get('/', function () { return view('pages.index'); });
Route::get('/dashboard', function () { return view('pages.app'); });

// companies
Route::get('/companies', function () { return view('pages.companies.index'); });
Route::get('/companies/edit', function () { return view('pages.companies.edit'); });

// jobs
Route::get('/jobs', function () { return view('pages.jobs.index'); });
Route::get('/jobs/detail', function () { return view('pages.jobs.detail'); });
Route::get('/jobs/create', function () { return view('pages.jobs.add'); });
Route::get('/jobs/edit', function () { return view('pages.jobs.edit'); });

// candidates
Route::get('/candidates', function () { return view('pages.candidates.index'); });

// applicants
Route::get('/applicants', function () { return view('pages.applicants.index'); });
Route::get('/applicants/detail', function () { return view('pages.applicants.detail'); });

// recommended
Route::get('/recommended', function () { return view('pages.recommended.index'); });

// guarantee
Route::get('/guarantee', function () { return view('pages.guarantee.index'); });

// chat
Route::get('/chat', function () { return view('pages.chat.index'); });

// promotion
Route::get('/promotion', function () { return view('pages.promotion.index'); });

// setting
Route::get('/setting/account', function () { return view('pages.setting.index'); });

// auth
Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });
