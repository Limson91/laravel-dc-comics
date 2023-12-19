@extends('layouts.app')

@section('content')
<h1>Modifica titolo</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="post">

@csrf

@method('PUT')

<label for="title">Titolo:</label>
<input type="text" name="title" id="title" value="{{ $comic->title }}" required>

<label for="description">Descrizione:</label>
<textarea name="description" id="description" required> {{ $comic->description }} </textarea>

<label for="price">Prezzo:</label>
<input type="text" name="price" id="price" value="{{ $comic->price }}" required>

<label for="series">Serie:</label>
<input type="text" name="series" id="series" value="{{ $comic->series }}" required>

<label for="sale_date">Data di Pubblicazione:</label>
<input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required>

<label for="type">Genere:</label>
<input type="text" name="type" id="type" value="{{ $comic->type }}" required>

<label for="thumb">Copertina:</label>
<input type="text" name="thumb" id="thumb" value="{{ $comit->thumb }}" required>

<button type="submit">Invia modifica</button>

</form>

<a href="{{ route('comic.index') }}">Vai alla lista</a>

@endsection