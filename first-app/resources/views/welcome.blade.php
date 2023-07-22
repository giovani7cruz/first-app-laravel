<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Project Laravel - Giovani Da Cruz</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>I'm happpy! This is my first laravel app</h1>

        <img src="/img/banner.jpg" alt="Banner">
        
        <h2>Treinando títulos</h2>
        
        {{-- Exemplo de if simples --}}
        @if(10 > 5)
            <p>A condição é True</p>
        @endif

        <p>{{$nome}}</p>

        {{-- Exemplo de if, ifelse e else --}}
        @if($nome == "Pedro")
            <p>O Nome é Pedro</p>
        @elseif($nome == "Giovani Da Cruz")
            <p>O Nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissao}}.</p>
        @else
            <p>Teste: {{$nome}}</p>
        @endif   
        
        {{-- Exemplo de loop for --}}
        Exemplo de loop for
        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i]}} - {{$i}}</p>
            @if( $i == 2 )
                <p>O i é igual a 2!</p>
            @endif
        @endfor

        {{-- Exemplo de Foreach no blade --}}
        Exemplo de Foreach no blade
        @foreach($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome}}</p>
        @endforeach

        {{-- Exemplo de php puro no blade --}}
        Exemplo de php puro no blade 
        @php
            $name = "João escrito em php puro";

            echo $name;
        @endphp
    </body>
</html>
