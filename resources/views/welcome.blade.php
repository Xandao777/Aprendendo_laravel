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
        @foreach($events as event)
            <div class="card col-md-3">
                <img src="" alt="" srcset="">

            </div>
        @endforeach

    </div>

</div>
@endsection
