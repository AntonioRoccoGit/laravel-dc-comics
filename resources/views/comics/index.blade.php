@extends('layouts.app')

@section('main')
    <main>
        <div class="container pt-2">
            <div class="my-2 text-end">
                <a class="btn btn-success" href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
            </div>
            <table class="table align-middle table-striped table-bordered table-sm mt-4">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ ucwords($comic->type) }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                                <a class="btn btn-warning ms-1" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

                                <form class="ms-1 d-inline-block" action="{{ route('comics.destroy', $comic->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger clicked-btn" href="">Elimina</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
