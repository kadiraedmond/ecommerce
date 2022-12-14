@extends('layouts.admin')

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
                        <a href="{{ url('blog') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Titre du blog</label>
                            <input type="text" name="titre" value="{{$blog->titre}}" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"> Information</label>
                            <textarea class="form-control" rows="3" name="info"  value="{{$blog->info}}"></textarea>
                        </div>
                         
                        <div class="form-group mb-3">
                            <label for="">Photo initiale</label>
                            <input type="file" name="picture" class="form-control">
                            <img src="{{ asset('uploads/blog/'.$blog->picture) }}" width="70px" height="70px" alt="Image">
                        </div>
                         
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update blog</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
