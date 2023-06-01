@extends('layouts.app')

@section('main')
    <main>

        <div class="container">
            <h2 class="mt-4 text-center">Modifica Prodotto</h2>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" value="{{ old('title', $comic->title) }}"
                        class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" value="{{ old('thumb', $comic->thumb) }}"
                        class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description"
                        class="form-label @error('description') is-invalid @enderror">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="8">{{ old('description', $comic->description) }}"</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo</label>
                    <input type="text" value="{{ old('price', $comic->price) }}" class="form-control" id="price"
                        name="price">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">Serie</label>
                    <input type="text" value="{{ old('series', $comic->series) }}" class="form-control" id="series"
                        name="series">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Data di
                        uscita</label>
                    <input type="date" value="{{ old('sale_date', $comic->sale_date) }}" class="form-control"
                        id="sale_date" name="sale_date">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select id="type" name="type" class="form-select @error('type') is-invalid @enderror">
                        <option value="" selected>Seleziona</option>
                        <option @selected($comic->type === 'comic book' || old('type') === 'comic book') value="comic book">Fumetto</option>
                        <option @selected($comic->type === 'graphic novel') value="graphic novel">Novella Grafica</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Modifica</button>
                <a href="{{ route('comics.index') }}" type="submit" class="btn btn-danger">Indietro</a>

            </form>
        </div>
    </main>
@endsection
