<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;


class AlunoController extends Controller
{
    public function form_aluno(Request $request)
    {
      return view('Aluno/cadastro_aluno');
    }

    public function cadastrar_aluno(Request $request){

      $aluno = Aluno::create($request->all());
      $request->session()
              ->flash(
                'msg',
                "Aluno {$aluno->nome} cadastrado com sucesso"
              );

      return redirect("/dashboard");
    }

    public function editar_form(int $id, Request $request)
    {
      $aluno = Aluno::find($id);
      return view('Aluno/editar_aluno', ['aluno' => $aluno]);
    }

    public function editar_aluno(int $id, Request $request){

      $aluno = Aluno::find($id);
      $aluno->update($request->all());

      return redirect("/dashboard");
    }

    public function remover_aluno(Request $request)
    {
      $aluno = Aluno::find($request->id);
      Aluno::destroy($request->id);
      $request->session()
      ->flash(
        'msg',
        "Aluno {$aluno->name} removido com sucesso"
      );

      return redirect("/dashboard");
    }
}
