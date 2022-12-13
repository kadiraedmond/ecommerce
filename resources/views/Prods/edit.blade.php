<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Modifier un produit
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('prods.update', $prod->id) }}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="country_name">Nom :</label>

                <input type="text" class="form-control" name="nom" value="{{ $prod->nom }}"/>
            </div>

			<div class="form-group mt-3">
                <label for="cases">Catégorie :</label>

                <select class="form-select" size="text" aria-label="size text select example" name="categorie"  value="{{ $prod->categorie }}">
                    <option selected></option>
                    <option value="telephone">Telephone</option>
                    <option value="ordinateur">Ordinateur</option>
                    <option value="imprimante">Imprimante</option>
                    <option value="accessoire">Accessoire</option>
                     

                </select>
            </div>

            <div class="form-group mt-3">
                <label for="cases">Description :</label>

                <input type="text" class="form-control" name="description" value="{{ $prod->description }}"/>
            </div>

            <div class="form-group mt-3">
                <label for="cases">Prix :</label>

                <input type="number" class="form-control" name="prix" value="{{ $prod->prix }}"/>
            </div>
            <div class="form-group mt-3">
                <label for="cases">Informations </label>

                <input type="text" class="form-control" name="info" value="{{ $prod->info }}"/>
            </div>
            <div class="image mt-3">
 			<label for="picture" >Images de face</label><br/>
			<input type="file" name="picture" id="picture"   value="{{ $prod->picture }}">
            </div>

            <div class="image mt-3">
 			<label for="picture" >Images de dos</label><br/>
			<input type="file" name="images" id="picture"   value="{{ $prod->images }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Modifier</button>
        </form>
    </div>
</div>
@endsection