@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 8 IMAGE CRUD
                        <a href="{{ url('add-blog') }}" class="btn btn-primary float-end">Add blog</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre du blog</th>
                                <th>info</th>
                                <th>Image 1</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->titre }}</td>
                                <td>{{ $item->info }}</td>
                                 
                                <td>
                                    <img src="{{ asset('uploads/blog/'.$item->picture) }}" width="70px" height="70px" alt="Image">
                                </td>
    
                                <td>
                                    <a href="{{ url('edit-blog/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-blog/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-blog/'.$item->id) }}" method="POST">
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