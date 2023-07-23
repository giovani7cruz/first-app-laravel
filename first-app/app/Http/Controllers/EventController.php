<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Giovani Da Cruz";
        $idade = 33;
        $profissao = "Programador";

        $arr = [10, 20, 30, 40, 50];

        $nomes = ["Giovani", "João", "José", "Joaquim"];

        /* O que se usa nas blades é o nome da chave do elemento no array */ 
        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade, 
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create(){
        return view('events.create');
    }
}
