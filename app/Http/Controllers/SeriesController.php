<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
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
        //$request->session()->forget('mensagem.sucesso');


        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function edit(int $id)
    {
        $serie = Serie::find($id);
        // $serie = DB::table('series')
        //     ->where('id', '=', $id)->get();

        return view('series.update')->with('serie', $serie);
    }


    public function update(SeriesFormRequest $request)
    {
        $id = $request['id'];  
        $nome = $request['nome'];

        DB::table('series')->where('id', '=', $id)->update(['nome' => $nome]);
        
        return to_route('series.index')->with('mensagem.sucesso', "Serie '{$nome}' atualizada!");
    }


    public function store(SeriesFormRequest $request)
    {
        // dd($request->all());
        // $nome = $request->nome;

        Serie::create($request->all());

        // $serie = new Serie;
        // $serie->nome = $nome;
        // $serie->save();

        //acesso direto ao banco, escrevendo sql
        //DB::insert('INSERT INTO series (nome) VALUES (?)', [$nome]);

        //$request->session()->put('mensagem.sucesso', "Serie '{$request->nome}' criada com sucesso");
        //$request->session()->forget('mensagemSucesso');
        return to_route('series.index')->with('mensagem.sucesso', "Serie '{$request->nome}' adicionada com sucesso");
    }

    public function destroy(Request $request)
    {
        //DB::table('series')->where('id', '=', $request->id)->delete();
        $serie = Serie::find($request->id); // procura algo pelo id e retorna todo o valor
        Serie::destroy($request->id);
        //$request->session()->put('mensagem.sucesso', "Serie '{$serie->nome}' removida com sucesso"); forma de criar variaveis de sessoes
        return to_route('series.index')->with('mensagem.sucesso', "Serie '{$serie->nome}' removida com sucesso");//with funciona como session flash
    }
}
