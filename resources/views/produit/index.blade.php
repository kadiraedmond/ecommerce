@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter produit
                        <a href="{{ url('add-produit') }}" class="btn btn-primary float-end">Add Produit</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom du produit</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Information</th>
                                <th>Prix</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produit as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nom }}</td>
                                <td>{{ $item->categorie }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->info }}</td>
                                <td>{{ $item->prix }}</td>
                                <td>
                                    <img src="{{ asset('uploads/produit/'.$item->picture) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/produit/'.$item->images) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{ url('edit-produit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-produit/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-produit/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection