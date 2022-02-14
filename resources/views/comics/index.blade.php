@extends('layouts.base')

@section('PageContent')
<h1 class="mb-3">Comics store</h1>
<a href="{{route("comics.create")}}"><button type="button" class="btn btn-info mb-3">aggiungi</button></a>
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
            <td>
                {{-- bottone visualizza --}}
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">visualizza</button></a>
                {{-- bottone modifica --}}
                <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning my-2">modifica</button></a>
                {{-- bottone elimina --}}
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST" >
                @csrf
                @method("DELETE")
                <div>
                    <button type="submit" class="btn btn-danger">elimina</button>
                </div>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection