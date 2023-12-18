@extends('layouts.app')

@section('content')
<h1>Comics List</h1>

@foreach ($comics as comic)
<div>
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->description }}</p>
    <p>Prezzo: ${{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di pubblicazione: {{ $comic->sale_date }}</p>
    <p>Genere: {{ $comic->type }}</p>
    <img src="{{ $comic->thumb }}" style="max-width: 150px;">
    <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
</div>
@endforeach

@endsection