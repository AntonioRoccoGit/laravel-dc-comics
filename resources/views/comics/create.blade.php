@extends('layouts.app')

@section('main')
    <main>
        <div class="container">

            <h2 class="mt-4 text-center">Aggiungi Prodotto</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror"
                        id="title" name="title">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input value="{{ old('thumb') }}" type="text"
                        class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description"
                        rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input value="{{ old('price') }}" type="text"
                        class="form-control  @error('price') is-invalid @enderror" id="price" name="price">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input value="{{ old('series') }}" type="text"
                        class="form-control @error('series') is-invalid @enderror" id="series" name="series">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input value="{{ old('sale_date') }}" type="date"
                        class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select id="type" name="type" class="form-select  @error('type') is-invalid @enderror">
                        <option selected value="">Seleziona</option>
                        <option @selected(old('type') === 'comic book') value="comic book">Fumetto</option>
                        <option @selected(old('type') === 'graphic novel') value="graphic novel">Novella Grafica</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <a href="{{ route('comics.index') }}" class="btn btn-danger">Indietro</a>

            </form>
        </div>
    </main>
@endsection
