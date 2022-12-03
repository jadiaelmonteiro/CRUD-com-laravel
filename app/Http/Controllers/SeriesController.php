<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SeriesController extends Controller
{
    public function index()
    {

        //acesso direto ao banco, escrevendo sql
        //$series = DB::select('SELECT nome from series');

        //Utilizando um select * from usando ORM FACADES DB
        //$series = Serie::all();

        //utilizando com uma querey mais complexa ordenando pelo nome
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function edit($id)
    {
        $serie = DB::table('series')
            ->where('id', '=', $id)->get();

        return view('series.update', compact('serie'));
    }


    public function update(Request $request)
    {
        $id = $request['id_serie'];
        $nome = $request['nome_atualizado'];
        DB::table('series')->where('id', '=', $id)->update(['nome' => $nome]);
        return to_route('series.index');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // $nome = $request->nome;
        Serie::create($request->all());

        // $serie = new Serie;
        // $serie->nome = $nome;
        // $serie->save();

        //acesso direto ao banco, escrevendo sql
        //DB::insert('INSERT INTO series (nome) VALUES (?)', [$nome]);
        return to_route('series.index');
    }

    public function destroy($id)
    {
        DB::table('series')->where('id', '=', $id)->delete();
        return to_route('series.index');
    }
}
