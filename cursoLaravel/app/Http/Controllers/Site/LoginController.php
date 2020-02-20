<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function index(){  //função pra abrir a index
      return view('login.index');
    }

    public function entrar(Request $req){   //função para logar no sistema
      $dados = $req->all();

      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){  //validacao
        return redirect()->route('admin.cursos');
      }

      return redirect()->route('admin.cursos');
    }

    public function sair(){  //função para deslogar do sistema
      Auth::logout();

      return redirect()->route('site.home');


    }
}
