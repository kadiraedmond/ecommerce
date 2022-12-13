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
        Ajouter un produit
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
        <form method="post" action="{{ route('prods.store') }}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label for="country_name">Nom :</label>

                <input type="text" class="form-control" name="nom" placeholder="Nom du produit"/>
            </div>

			<div class="form-group mt-3">
                <label for="cases">Catégorie :</label>

                <select class="form-select" size="text" aria-label="size text select example" name="categorie">
                    <option selected></option>
                    <option value="telephone">Telephone</option>
                    <option value="ordinateur">Ordinateur</option>
                    <option value="imprimante">Imprimante</option>
                    <option value="accessoire">Accessoire</option>
                     

                </select>
            </div>
            <div class="form-group mt-3">
                <label for="cases">Description :</label>

                <input type="text" class="form-control" name="description" placeholder="Caractéristiques du produit"/>
            </div>

            <div class="form-group mt-3">
                <label for="cases">Prix :</label>

                <input type="number" class="form-control" name="prix" placeholder="Prix"/>
            </div>
            <div class="form-group mt-3">
                <label for="cases">Informations </label>

                <input type="text" class="form-control" name="info" placeholder="Information du produit"/>
            </div>
            <div class="image mt-3">
 			<label for="picture" >Images de face</label><br/>
			<input type="file" name="picture" id="picture" >
            </div>
            <div class="image mt-3">
 			<label for="images" >Images de dos</label><br/>
			<input type="file" name="images" id="picture" >
            </div>

            <button type="submit" class="btn btn-primary mt-3" style="background-color: #2eca6a !important; border: none;">Ajouter</button>
        </form>
    </div>
</div>
@endsection