<?php

use App\Http\Controllers\ProduitController;

use App\Http\Controllers\RproductController;
use App\Http\Controllers\HelloWorldController;


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



Route::get('/produitsr/{cat}', [ProduitController::class,'getProdByCat']) ;



Route::get('/hello', HelloWorldController::class);

/*************Routes Controller Resource************/
/**
** Route::get('/produits', 'RproductController@index')->name('index');    //    Appel : <a href="{{ route('name') }}">
** Route::get('/produits/create',[RproductController::class,'create'])->name('create');
** Route::post('/produits', [RproductController::class,'store'])->name('store');
** Route::get('/produits/{id}', [RproductController::class,'show'])->name('show');
** Route::get('/produits/{id}/edit', [RproductController::class,'edit'])->name('edit'); // Appel : route('edit', ['id' => $id]);
** Route::put('/produits/{id}', [RproductController::class,'update'])->name('update');
** Route::delete('/produits/{id}', [RproductController::class,'destroy'])->name('destroy');
**/

Route::resource('produits', RproductController::class);


Route::get('/produits/create',[RproductController::class,'create'])->name('create');



Route::delete('/produits/{id}', [RproductController::class,'destroy'])->name('destroy');
