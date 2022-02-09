@extends('layouts.base')

@section('PageContent')
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p>
        {{$comic->description}}
    </p>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">indietro</button></a>
@endsection