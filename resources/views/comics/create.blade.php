@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <h2 class="mt-4 text-center">Aggiungi Prodotto</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita YYYY-MM-DD</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select id="type" name="type" class="form-select">
                        <option selected>Seleziona</option>
                        <option value="comic book">Fumetto</option>
                        <option value="graphic novel">Novella Grafica</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Aggiungi</button>

            </form>
        </div>
    </main>
@endsection
