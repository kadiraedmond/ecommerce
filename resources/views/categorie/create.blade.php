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
                    <h4>Add Categorie with IMAGE
                        <a href="{{ url('categorie') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-categorie') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nom du categorie</label>
                            <input type="text" name="nom" class="form-control">
                        </div>
 
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save categorie</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection