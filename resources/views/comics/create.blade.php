@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>            

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>            

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
