@extends('layouts.app')

@section('content')
<p>Are you sure you want to delete "{{ $comic->title }}"?</p>
<form action="{{ route('comics.destroy', $comic) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Confirm Delete</button>
</form>
@endsection
