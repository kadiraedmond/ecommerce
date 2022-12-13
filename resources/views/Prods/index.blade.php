<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
		  <td>Catégorie</td>
          <td>Description</td>
          <td>Prix</td>
          <td>Informations</td>
          <td>Images de face</td>
          <td>Images de dos</td>
          
           

          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($prods as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->nom}}</td>
			      <td>{{$prod->categorie}}</td>
            <td>{{$prod->description}}</td>
            <td>{{$prod->prix}}</td>
            <td>{{$prod->info}}</td>
            <td>
			  <img src="{{ asset('storage/'.$prod->picture) }}" alt="image de couverture actuelle" style="max-height:60px;" >
            </td>
            <td>
			  <img src="{{ asset('storage/'.$prod->images) }}" alt="image de couverture actuelle" style="max-height:60px;" >
            </td>

            <td><a href="{{ route('prods.edit', $prod->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('prods.destroy', $prod->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection