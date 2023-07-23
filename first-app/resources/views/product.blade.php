@extends('layout.main')

@section('title', 'Produto')

@section('content')
    @if($id != null)
        <p>Exibindo produto id: {{$id}}.</p>
    @else
        <p>Id do produto não informado!</p>
    @endif
@endsection