<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Project Laravel - Giovani Da Cruz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body>
        <h1>I'm happpy! This is my first laravel app</h1>
        
        <h2>Treinando títulos</h2>
        @if(10 > 5)
            <p>A condição é True</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
            <p>O Nome é Pedro</p>
        @elseif($nome == "Giovani Da Cruz")
            <p>O Nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissao}}.</p>
        @else
            <p>Teste: {{$nome}}</p>
        @endif    
    </body>
</html>
