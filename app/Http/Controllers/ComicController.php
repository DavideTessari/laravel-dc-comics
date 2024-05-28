<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

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
        $this->validation($formData);

        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();
    
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }
    
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $this->validation($formData);

        $comic = Comic::findOrFail($id);
        $comic->update($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:5|max:50',
                'description' => 'nullable|min:10|max:2000',
                'thumb' => 'required|max:250',
                'price' => 'required|max:20',
                'series' => 'required|max:50',
                'sale_date' => 'required|date',
                'type' => 'required|max:20'
            ],
            [
                'title.required' => 'Il campo titolo è obbligatorio',
                'title.max' => 'Il campo titolo non può avere più di 50 caratteri',
                'title.min' => 'Il campo titolo deve avere almeno 5 caratteri',
                'thumb.required' => 'Il campo immagine è obbligatorio',
                'price.required' => 'Il campo prezzo è obbligatorio',
                'series.required' => 'Il campo serie è obbligatorio',
                'sale_date.required' => 'Il campo data di vendita è obbligatorio',
                'sale_date.date' => 'Il campo data di vendita deve essere una data valida',
                'type.required' => 'Il campo tipo è obbligatorio'
            ]
        )->validate();

        return $validator;
    }
}
