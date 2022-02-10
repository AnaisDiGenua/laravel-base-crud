<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //prendo i dati del form
        $data = $request->all();
        //inserisco un nuovo record nella tabella
        $newComic = new Comic;
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->series = $data["series"];
        $newComic->type = $data["type"];
        $newComic->save();

        //restituisco una pagina
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // SELECT * FROM comics WHERE ID = x
        // $comic = Comic::find($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //restituisco il form per modificare questo elemento
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //prendo i dati dal form con request
        $data = $request->all();

        //aggiorno la risorsa con i nuovi dati
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->price = $data["price"];
        $comic->sale_date = $data["sale_date"];
        $comic->series = $data["series"];
        $comic->type = $data["type"];
        $comic->save();

        //restituisco la pagina show della risorsa modificata
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
