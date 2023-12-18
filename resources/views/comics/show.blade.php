@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>Prezzo: ${{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di pubblicazione: {{ $comic->sale_date }}</p>
    <p>Genere: {{ $comic->type }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 300px;">
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
