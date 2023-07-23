@extends('layout.main')

@section('title', '947 Events - Produtos')

@section('content')
    <h1>Tela de Produtos</h1>

    @if($busca != '')
        <p>O usuário está pesquisando por: {{$busca}}</p>
    @endif    
@endsection