@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <!-- Imprimindo dados do banco de dados-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($events as $event)
                <div class="col">
                    <div class="card">
                        <img src="/img/baixados.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <button type="button" class="btn btn-primary">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    {{-- Comentario pelo Blande --}}
@endsection