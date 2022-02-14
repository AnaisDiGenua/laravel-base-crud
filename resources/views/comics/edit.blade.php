@extends('layouts.base')

@section('PageContent')
<h1>Modifica prodotto: {{$comic->title}}</h1>

<form action="{{route("comics.update", $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="inserisci il titolo" value="{{$comic->title}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="inserisci la serie" value="{{$comic->series}}">
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sale_date">Data d'uscita</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" value="{{$comic->sale_date}}">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <select class="form-control form-control-md @error('type') is-invalid @enderror" id="type" name="type">
            @php
                $selected = old("type") ? old("type") : $comic->type;
            @endphp
                <option value="comic book" {{$selected == "comic book" ? "selected" : ""}}>comic book</option>
                <option value="graphic novel" {{$selected == "graphic novel" ? "selected" : ""}}>graphic novel</option>
        </select>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="inserisci l'url dell'immagine" value="{{$comic->thumb}}">
        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="inserisci il prezzo" value="{{$comic->price}}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="inserisci una descrizione">{{$comic->description}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">modifica</button>
</form>
@endsection