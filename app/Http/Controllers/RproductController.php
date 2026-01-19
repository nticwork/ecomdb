<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Produit;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class RproductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=Produit::paginate(3);
        return view('home', ['products' => $produits ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproduit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductRequest $request)
    {


        $request->validated();
/*
         // récupérer les valeurs des champs :
         $nom=$request->input('nom');
         $prix=$request->input('prix');
         $categorie=$request->input('categorie');
         $image=$request->file('image')->getClientOriginalName();

         //Créer un objet Produit

         $Produit= new Produit();

         $Produit->nom=$nom;
         $Produit->prix=$prix;
         $Produit->categorie=$categorie;
         $Produit->image=$image;

           // enregistrer dans la table articles
         $Produit->save();

           // enregistrer dans le dossier (public\images)


           $request->file('image')->move(public_path('imgs'), $image);

           return back()->with('success','You have successfully added a new Product.');
           */


$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
        'api_key'    => env('CLOUDINARY_API_KEY'),
        'api_secret' => env('CLOUDINARY_API_SECRET'),
    ],
]);

$result = $cloudinary->uploadApi()->upload(
    $request->file('image')->getRealPath(),
    [
        'folder' => 'produits',
    ]
);

$imageUrl = $result['secure_url'];

        // 3) Save en DB
        $produit = new Produit();
        $nom=$request->input('nom');
         $prix=$request->input('prix');
         $categorie=$request->input('categorie');


          $produit->nom=$nom;
         $produit->prix=$prix;
         $produit->categorie=$categorie;

        // adapte le nom de colonne selon ta DB :
        // ex: image, image_url, photo, etc.
        $produit->image = $imageUrl;

        $produit->save();

        // 4) Redirect
      return back()->with('success','You have successfully added a new Product.');






    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
