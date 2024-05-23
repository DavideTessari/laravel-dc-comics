@extends('layouts.app')

@section('content')
<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')
</form>
@endsection
