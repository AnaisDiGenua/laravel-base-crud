@extends('layouts.base')

@section('PageContent')
    <h1>Crea un nuovo articolo</h1>

    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo" value="{{old("title")}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie" value="{{old("series")}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data d'uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" value="{{old("sale_date")}}">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <select class="form-control form-control-md" id="type" name="type">
                <option value="comic book" {{old("type") == "comic book" ? "selected" null}}>comic book</option>
                <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" null}}>graphic novel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci l'url dell'immagine" value="{{old("thumb")}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step=".01" class="form-control" id="price" name="price" placeholder="inserisci il prezzo" value="{{old("price")}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="5" class="form-control" class="description" placeholder="inserisci una descrizione">{{old("description")}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">crea</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection