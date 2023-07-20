<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "leandro";
        $arr = [10,20,30,40,50,60,70,80,90,100];
        return view('welcome',
        [
            'nome' => $nome,
            'arr' => $arr,
            'nomes' => ["Xandão", "paulo", "tales", "nathan", "Eminem"]
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
