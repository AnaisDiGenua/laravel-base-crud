@extends('layouts.base')

@section('PageContent')
<h1 class="mt-5 mb-3">Comics store</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">descrizione</th>
            <th scope="col">serie</th>
            <th scope="col">tipo</th>
            <th scope="col">prezzo</th>
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
        </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection