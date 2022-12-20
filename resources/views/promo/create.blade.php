@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Produit prromotionnelle with IMAGE
                        <a href="{{ url('promo') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-promo') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nom du promo</label>
                            <input type="text" name="titre" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="cases">type :</label>

                            <select class="form-select" size="text" aria-label="size text select example" name="type">
                                <option selected></option>
                                <option value="section1">Premiere section</option>
                                <option value="section2">Espace promotion </option>  

                            </select>
                        </div>
            
                        <div class="form-group mb-3">
                            <label for="">Information sur le produit</label>
                            <input type="text" name="info" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Prix du produit</label>
                            <input type="number" name="prix" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Prix du prromotionnelle</label>
                            <input type="number" name="prixpromo" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Photo de initiale</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                         
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save promo</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection