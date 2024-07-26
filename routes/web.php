<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/forgot', function () {
    return view('auth.forgot');
});
Route::get('/send', function () {
    return view('auth.send');
});
Route::get('/update', function () {
    return view('auth.update');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/products', function () {
    return view('admin.products.index');
});
Route::get('/admin/products/show', function () {
    return view('admin.products.show');
});
Route::get('/admin/brand', function () {
    return view('admin.brand.index');
});
Route::get('/admin/category', function () {
    return view('admin.category.index');
});
Route::get('/admin/transaction', function () {
    return view('admin.transaction.index');
});
Route::get('/admin/user', function () {
    return view('admin.user.index');
});
Route::get('/admin/report', function () {
    return view('admin.report.index');
});
Route::get('/kasir', function () {
    return view('kasir.dashboard');
});
Route::get('/kasir/transaction', function () {
    return view('kasir.cashier.index');
});
Route::get('admin/transaction/currency', function () {
    return view('Admin.transaction.currency');
});