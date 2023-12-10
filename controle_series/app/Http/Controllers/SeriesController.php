<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $series = [
          "The Big Bang Theory",
          "The Last Of Us",
          "Black Mirror"
        ];
        //A função view o nome do arquivo que está em resource/views, como segundo parâmetro recebe um array onde a chave será o nome da variável que será passada para a view.

        //A função compact retorna um array com a string do argumento como chave e identificação da variável de mesmo nome como valor, ou seja, ['series' => $series]
        //return view('listarSeries', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create ()
    {
        return view('series.create');
    }
}
