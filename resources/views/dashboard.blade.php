@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Mangás</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
        @else
            <p>Você ainda não tem mangás cadastrados, <a href="/events/create">cadastrar mangá</a></p>
        @endif
    </div>

@endsection
