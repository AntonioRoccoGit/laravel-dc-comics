@extends('layouts.app')
@section('main')
    <main>


        <div class="containter">

            <div class="text-center mt-2 mb-2">
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seleziona prodotto
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($comic_array as $item)
                            <li>
                                <a class="dropdown-item" href="{{ route('comics.show', $item->id) }}">
                                    <div class="card flex-row align-items-center gap-2">
                                        <img class="img-fluid" style="height: 40px" src="{{ $item->thumb }}"
                                            alt="">
                                        <h5 style="font-size: .8rem" class="card-title">{{ $item->title }}</h5>

                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card p-4 text-center ">
                <img style="width: 300px" class="card-img-top m-auto" src="{{ $comic->thumb }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">
                    <h4>Descrizione:<br></h4>{{ $comic->description }}</p>
                    <ul class="list-group list-group-flush text-start">
                        <li class="list-group-item"><strong>Serie: </strong> {{ $comic->series }}</li>
                        <li class="list-group-item"><strong>Data d'uscita: </strong> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><strong>Tipologia: </strong> {{ ucwords($comic->type) }}</li>
                        <li class="list-group-item"><strong>Prezzo: </strong> {{ $comic->price }}</li>
                        <li class="list-group-item"><strong>Ultima modifica: </strong> {{ $comic->updated_at }}</li>
                    </ul>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla dashboard</a>
                </div>
            </div>
        </div>
    </main>
@endsection
