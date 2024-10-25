@extends('layout.main')
@section('title', 'Início')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque por um Volume</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Mangás</h2>
            <p class="subtitle">Veja a lista de mangás</p>
        @endif
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-4">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">Pedido(s): {{ count($event->users) }}</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum mangá com {{ $search }}</p> <a href="/">Ver todos</a>
            @elseif (count($events) == 0)
                <p>Não há mangás disponíveis.</p>
            @endif
        </div>
    </div>

@endsection
