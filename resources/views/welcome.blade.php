@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>teste</h1>
<img src="/img/03512A495F2CC586A70518EC388AAC31914D_palestra.jpg" alt="" srcset="">
@if(10 > 1)
    <p>{{$nome}}</p>
@endif
    <hr>
@if($nome == "marcos")
        <p>O seu nome e legal</p>
@elseif($nome != "marcos")
    <p>O nome {{$nome}}, e uma merda</p>
@endif
 <hr>
@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
@endfor
       <hr>
@php
    $nome = "Alexandre";
    echo $nome;
@endphp
    <hr>
@foreach($nomes as $nomes)
    {{$loop->index}}
    - {{$nomes}}
     <br>
@endforeach
{{-- Comentario em blade --}}

@endsection
