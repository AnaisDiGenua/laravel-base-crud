@extends('layouts.base')

@section('PageContent')
<h1>Crea un nuovo articolo</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <select class="form-control form-control-md" id="type" name="type">
            <option value="comic-book">comic book</option>
            <option value="graphic-novel">graphic novel</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step=".01" class="form-control" id="price" class="price" placeholder="inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" rows="5" class="form-control" class="description" placeholder="inserisci una descrizione"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">crea</button>
</form>
@endsection