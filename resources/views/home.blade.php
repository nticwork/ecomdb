@extends('master_page')
@section('title','Home')
@section('content')
<h1 class="text-center">Bienvenue sur notre site e-commerce</h1>
<p class="text-center">Découvrez nos produits de qualité à des prix compétitifs</p>


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
    <td>{{$item->nom  }}</td>
    <td>{{$item['prix']  }}DH</td>
    </tr>

@endforeach


    </tbody>
  </table>
  <div class="d-flex justify-content-center">
  {{ $products->links('vendor.pagination.custom') }}
  </div>
@endsection
