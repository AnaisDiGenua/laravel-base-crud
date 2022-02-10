@extends('layouts.base')

@section('PageContent')
<h1>Modifica prodotto: {{$comic->title}}</h1>

<form action="{{route("comics.update", $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo" value="{{$comic->title}}">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie" value="{{$comic->series}}">
    </div>
    <div class="form-group">
        <label for="sale_date">Data d'uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" value="{{$comic->sale_date}}">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="inserisci il tipo" value="{{$comic->type}}">
    </div>
    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci l'url dell'immagine" value="{{$comic->thumb}}">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step=".01" class="form-control" id="price" name="price" placeholder="inserisci il prezzo" value="{{$comic->price}}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" rows="5" class="form-control" class="description" placeholder="inserisci una descrizione">{{$comic->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">modifica</button>
</form>
@endsection