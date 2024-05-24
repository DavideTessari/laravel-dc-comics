@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh; background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Benvenuto alla Home</div>

                <div class="card-body">
                    <p class="text-center">Benvenuto su questo fantastico sito di fumetti!</p>
                    <p class="text-center">Scopri il nostro vasto assortimento di fumetti e inizia la tua avventura!</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Esplora i fumetti</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
