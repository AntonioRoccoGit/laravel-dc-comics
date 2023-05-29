@extends('layouts.app')
@section('main')
    <main>
        <div class="containter">
            <div class="card p-4 text-center ">
                <img style="width: 300px" class="card-img-top m-auto" src="{{ $comic->thumb }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">
                    <h4>Descrizione:<br></h4>{{ $comic->description }}</p>
                    <ul class="list-group list-group-flush text-start">
                        <li class="list-group-item"><strong>Serie: </strong> {{ $comic->series }}</li>
                        <li class="list-group-item"><strong>Data d'uscita: </strong> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><strong>Tipologia: </strong> {{ ucwords(trans($comic->type)) }}</li>
                        <li class="list-group-item"><strong>Prezzo: </strong> {{ $comic->price }}</li>
                        <li class="list-group-item"><strong>Ultima modifica: </strong> {{ $comic->updated_at }}</li>
                    </ul>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla dashboard</a>
                </div>
            </div>
        </div>
    </main>
@endsection
