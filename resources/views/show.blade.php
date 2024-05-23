@extends('layouts.app')

@section('content')
<div class="card">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->description }}</p>
        <p class="card-text"><strong>Price:</strong> ${{ $comic->price }}</p>
        <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
        <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
        <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
    </div>
</div>
@endsection
