@extends('layouts.app')

@section('main')
    <main>
        <div class="container pt-2">
            <div class="my-2 text-end">

                <a class="btn btn-success" href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
                <a class="btn btn-danger" href="{{ route('home') }}">Log-out</a>
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
                            <td class="d-flex flex-column align-items-center">
                                <div class="btn-group me-2" role="group">

                                    <a class="btn btn-info w-50" href="{{ route('comics.show', $comic->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning w-50" href="{{ route('comics.edit', $comic->id) }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>

                                <form class="mt-1 d-inline-block" action="{{ route('comics.destroy', $comic->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger clicked-btn" href=""><i
                                            class="fa-solid fa-ban"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
