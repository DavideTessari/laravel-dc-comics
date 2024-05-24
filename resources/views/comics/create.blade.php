@extends('layouts.app')

@section('content')
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
</form>
@endsection
