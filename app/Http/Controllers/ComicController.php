<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();
    
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        
        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $formData = $request->all();
        
        // Aggiornamento dei dati del fumetto
        $comic->update($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


}
