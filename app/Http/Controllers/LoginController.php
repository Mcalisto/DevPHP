<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aluno;
use App\Models\Cursos;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }else {
          return redirect()->back();
        }
    }

    public function dashboard(Request $request)
    {
      $alunos = Aluno::all();
      $msg = $request->session()->get('msg');
      return view('Dashboard/dashboard', ['alunos' => $alunos, 'msg' => $msg]);

    }

    public function cursos_dashboard(Request $request)
    {
      $cursos = Cursos::all();
      $msg = $request->session()->get('msg');
      return view('Dashboard/cursos_dashboard', ['cursos' => $cursos, 'msg' => $msg]);

    }

    public function exibir_questao()
    {
      return view('Login/questao');
    }
}
