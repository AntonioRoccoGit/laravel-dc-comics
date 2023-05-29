@extends('layouts.app')

@section('main')
    <main>
        <div class="container w-50">
            <h1 class="text-center py-4"> Pagina di log-in </h1>
            <div class="d-flex justify-content-end">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Login</a>

            </div>
        </div>
    </main>
@endsection
