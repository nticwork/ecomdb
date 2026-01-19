@extends('master_page')
@section('title','Produits')

@section('content')
<h2> Liste des Prduits de la catégorie  {{ $categorie }}</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>

@foreach ($products as $item)
<tr>
    <td>{{$item['nom']  }}</td>
    <td>{{$item['prix']  }}DH</td>
    <td>    <img src="{{$item['image']}}" alt="Image " class="img-fluid" width="100"></td>
  </tr>

@endforeach


    </tbody>
  </table>



@endsection
