<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view("index");
});

Route::get('/aboutus', function () {
    return view("aboutus");
});

Route::get('/support', function () {
    return view("support");
});

Route::get('/s_register', function () {
    return view("s_register");
});


Route::get('/user_dashboard', function () {
    return view("user_dashboard");
});


Route::get('/user_dashboard/{page}', function ($page) {
    return view("user_dashboard.pages.$page");
});


Route::get('/user_dashboard/pages/{page}', [UserDashboardController::class, 'loadPage']);



Route::get('/admin_dashboard/pages/{page}', [AdminDashboardController::class, 'loadPage']);


Route::get('/admin_dashboard', function () {
    return view("admin_dashboard");
});

Route::get('/admin_dashboard/{page}', function ($page) {
    return view("admin_dashboard.pages.$page");
});

Route::get('/expform', function () {
    return view("expform");
});