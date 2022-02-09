@extends('layouts.base')

@section('PageContent')
<h1 class="mb-3">Comics store</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">descrizione</th>
            <th scope="col">serie</th>
            <th scope="col">tipo</th>
            <th scope="col">prezzo</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">visualizza</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection