@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="procurar....">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p>veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/03512A495F2CC586A70518EC388AAC31914D_palestra.jpg" alt="" srcset="">
                <div class="card-body">
                    <p class="card-date">10/07/2023</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>

                </div>

            </div>
        @endforeach

    </div>

</div>
@endsection
