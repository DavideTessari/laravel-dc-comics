@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($comics as $comic)
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text"><strong>Price:</strong> ${{ $comic->price }}</p>
                <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View Details</a>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
                <div class="py-1">
                    <form class="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger js-delete-btn" data-comic-title="{{ $comic->title }}" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Il contenuto sarà popolato dinamicamente via JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="modal-confirm-deletion">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection