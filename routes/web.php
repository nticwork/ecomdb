<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return 'DB OK';
    } catch (\Throwable $e) {
        return $e->getMessage();
    }
});




Route::get('/users-test', function () {
    return User::all();
});
