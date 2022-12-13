@extends("layouts.app")
@section("title", $prod->title)
@section("content")

	<h1>{{ $prod->title }}</h1>

	<img src="{{ asset('storage/'.$prod->picture) }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $prod->content }}</div>

	<p><a href="{{ route('prods.index') }}" title="Retourner aux articles" >Retourner aux prods</a></p>

@endsection