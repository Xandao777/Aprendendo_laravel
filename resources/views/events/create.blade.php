@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-crete-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento e privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" cols="30" class="form-control" placeholder="O que vai acontecer no evento" rows="10"></textarea>
        </div>
        <input type="submit" value="Confirmar" data-bs-toggle="modal" data-bs-target="#caixa-escondida" class="btn btn-primary">
    </form>
</div>


@endsection
