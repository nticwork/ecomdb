<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Produit;


class ProduitController extends Controller
{
    public function home(){



    $produits=Produit::paginate(2);
    return view('home', ['products' => $produits ]);

}

public function getProdByCat(Request $rq){


$cat=$rq->route('cat');

    $produits = Produit::where('categorie', '=', $cat)->get();

    return view('produits', [
       'products' => $produits,
       'categorie' => $cat
       ]);

}
}
