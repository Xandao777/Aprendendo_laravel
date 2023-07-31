@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" name="search" id="search" class="form-control" placeholder="procurar....">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Proximos eventos</h2>
        <p>veja os eventos dos proximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}" srcset="">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/y', strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p class="display-7">Não foi posivel encontrar o evento: {{ $search }} <a class="display-7" href="/">Ver todos!</a> </p>
        @elseif(count($events) == 0)
            <p class="display-7">Não hã eventos disponiveis</p>
        @endif
    </div>
</div>
@endsection
