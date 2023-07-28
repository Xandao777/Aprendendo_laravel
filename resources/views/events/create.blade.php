@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-crete-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" class="form-control">
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
        <div class="form-group">
            <label for="items">Itens de infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" id=""> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="palco" id=""> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Estandes" id=""> Estandes
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Comida Gratis" id=""> Comida gratis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Bebidas Gratis" id=""> Bebidas gratis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes" id=""> Brindes
            </div>
        </div>
        <input type="submit" value="Confirmar" data-bs-toggle="modal" data-bs-target="#caixa-escondida" class="btn btn-primary">
    </form>
</div>


@endsection
