@extends('master_page')
@section('title','Edit ')

@section('content')
<h2> Modifier Le produit:</h2>

<div class="container justify-content-center mt-3">
    @include('incs.flash')
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modifier le  produit') }}</div>

                    <div class="card-body">

<form action="/produits/{{$produit->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="title">Nom du produit</label>
      @error('nom')
          {{ $message }}
      @enderror
       <input type="text" class="form-control"  id="title" name="nom" value="{{ $produit->nom }}">
    </div>
    <div class="form-group">
      <label for="content">Prix du produit</label>
      @error('prix')
          {{ $message }}
      @enderror
      <input type="text" class="form-control"  id="title" name="prix" value={{ $produit->prix }}>
    </div>
    <div class="form-group">
        <label for="image">{{ __('Image du produit') }}</label>
        <input id="image" type="file" class="form-control-file" name="image">
    </div>
    <div class="form-group">
        <label for="content">Categorie du produit</label>
        @error('categorie')
            {{ $message }}
        @enderror
        <input type="text" class="form-control"  id="title" name="categorie" value={{ $produit->categorie }}>
      </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Inclure les fichiers JavaScript de Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>

