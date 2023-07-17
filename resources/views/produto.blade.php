@extends('layouts.main')

@section('title', 'produtos')

@section('content')
    @if($id != null)
        <p>exibindo produto id:{{ $id }}</p>
    @endif

@endsection
