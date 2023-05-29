@extends('layouts.app')

@section('main')
    <main>
        <div class="container pt-2">
            <div class="my-2 text-end">
                <a class="btn btn-warning" href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
            </div>
            <table class="table mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ ucwords($comic->type) }}</td>
                            <td><a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Dettagli</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
