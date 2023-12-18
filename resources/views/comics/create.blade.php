@extends('layouts.app')

@section('content')
<h1>Comics Load</h1>
<form action="{{ route('comics.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <label for="title">Titolo:</label>
    <input type="text" name="titolo" id="title" required>

    <label for="description">Descrizione:</label>
    <input type="text" name="description" id="description" required>

    <label for="price">Prezzo:</label>
    <input type="text" name="price" id="price" required>

    <label for="title">Genere:</label>
    <input type="text" name="series" id="series" required>

    <label for="thumb">Copertina:</label>
    <input type="file" name="thumb" id="thumb" accept="image/*"" required>

    <button type="submit">Invia</button>
</form>

<a href="{{ route('comics.index') }}">Vai alla lista</a>

@endsection