<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Models\User;





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


Route::get('/',[ProduitController::class,'home']);



Route::get('/produits/{cat}', [ProduitController::class,'getProdByCat']) ;
