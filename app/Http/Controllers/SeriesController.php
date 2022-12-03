<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SeriesController extends Controller
{
    public function index(Request $request)
    {

        //acesso direto ao banco, escrevendo sql
        //$series = DB::select('SELECT nome from series');

        //Utilizando um select * from usando ORM FACADES DB
        //$series = Serie::all();

        //utilizando com uma querey mais complexa ordenando pelo nome
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');


        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {
        $mensagemSucesso = $request->session()->put('mensagem.sucesso', 'Serie criada com sucesso');
        $request->session()->forget('mensagemSucesso');

        return view('series.create')->with('mensagemSucesso', $mensagemSucesso);
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

    public function destroy(Request $request)
    {
        //DB::table('series')->where('id', '=', $request->id)->delete();
        Serie::destroy($request->id);
        $request->session()->put('mensagem.sucesso', 'Serie removida com sucesso');
        return to_route('series.index');
    }
}
