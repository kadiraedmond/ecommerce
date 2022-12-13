@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Student with IMAGE
                        <a href="{{ url('produit') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-produit/'.$produit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Nom du produit</label>
                            <input type="text" name="nom" value="{{$produit->nom}}" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="cases">Catégorie :</label>

                            <select class="form-select" size="text" aria-label="size text select example" name="categorie" value="{{$produit->categorie}}">
                                <option selected></option>
                                <option value="telephone">Telephone</option>
                                <option value="ordinateur">Ordinateur</option>
                                <option value="imprimante">Imprimante</option>
                                <option value="accessoire">Accessoire</option>
                                

                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description du produit</label>
                            <input type="text" name="description" value="{{$produit->course}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Information sur le produit</label>
                            <input type="text" name="info" value="{{$produit->info}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Prix du produit</label>
                            <input type="number" name="prix" value="{{$produit->prix}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Photo initiale</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="{{ asset('uploads/produit/'.$produit->picture) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Photo de couverture</label>
                            <input type="file" name="images" class="form-control">
                            <img src="{{ asset('uploads/produit/'.$produit->images) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Produit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
