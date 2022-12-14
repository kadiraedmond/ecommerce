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
                    <h4>Add Student with IMAGE
                        <a href="{{ url('blog') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Titre du blog</label>
                            <input type="text" name="titre" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"> Information</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>

                        </div>
    
                        <div class="form-group mb-3">
                            <label for="">Photo de initiale</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                         
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save blog</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection