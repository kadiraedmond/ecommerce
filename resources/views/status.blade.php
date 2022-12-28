
 @extends('layouts.front')

  @section('content')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="error-content">
                        <div class="card mb-0">
                            <div class="card-body text-center">
                                <h1 class="error-text text-primary">
                                   <img src="{{ asset('front/images/panier.png') }}" class="img-fluid" style="width: 139px;" alt="">
                                </h1>
                                <h4 class="mt-4"><i class="fa fa-thumbs-down text-danger"></i> Votre panier est vide.</h4>
                                <p>Your Request resulted in an error.</p>
                                <form class="mt-5 mb-5">
                                    
                                    <div class="text-center mb-4 mt-4"><a href="{{url('/')}}" class="btn" style="background-color:#eb5b27; color:white;">aller à la page d'accueil</a>
                                    </div>
                                </form>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection







