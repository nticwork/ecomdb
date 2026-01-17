@extends('master_page')
@section('title','add Produits')

@section('content')
<h2> Ajouter un nouveau produit:</h2>

<div class="container justify-content-center mt-3">
    @include('incs.flash')
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter un nouveau produit') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/produits" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nom">{{ __('Nom du produit') }}</label>
                                <input id="nom" type="text" class="form-control" name="nom">
                                    @error('nom')
                                       {{ $message }}
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="prix">{{ __('Prix du produit') }}</label>
                                <input id="prix" type="text" class="form-control" name="prix">
                                @error('prix')
                                   {{ $message }}
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categorie">{{ __('Catégorie du produit') }}</label>
                                <input id="categorie" type="text" class="form-control" name="categorie">
                                @error('categorie')
                                       {{ $message }}
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="image">{{ __('Image du produit') }}</label>
                                <input id="image" type="file" class="form-control-file" name="image">
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter le produit') }}
                                </button>
                            </div>
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

