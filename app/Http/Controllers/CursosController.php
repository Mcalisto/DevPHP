<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;

class CursosController extends Controller
{
    public function form_curso()
    {
      return view('Cursos/cadastro_curso');
    }

    public function cadastrar_curso(Request $request)
    {
      $curso = Cursos::create($request->all());
      $request->session()
      ->flash(
        'msg',
        "Curso {$curso->name} cadastrado com sucesso"
      );

      return redirect("/dashboard/cursos");

    }

    public function editar_form(int $id, Request $request)
    {
      $curso = Cursos::find($id);
      return view('Cursos/editar_curso', ['curso' => $curso]);
    }

    public function editar_curso(int $id, Request $request){

      $curso = Cursos::find($id);
      $curso->update($request->all());
      $request->session()
      ->flash(
        'msg',
        "Curso {$curso->name} alterado com sucesso"
      );

      return redirect("/dashboard/cursos");
    }

    public function remover_curso(Request $request)
    {
      $curso = Cursos::find($request->id);
      Cursos::destroy($request->id);
      $request->session()
      ->flash(
        'msg',
        "Curso {$curso->name} removido com sucesso"
      );

      return redirect("/dashboard/cursos");
    }

    public function import_xml(Request $request)
    {

      $xml = simplexml_load_file($request->xml);
      foreach ($xml as $dados) {
        $curso = new Cursos;
        $curso->name = $dados->nome;
        $curso->codigo = $dados->codigo;
        $curso->save();
      }
    }
}
