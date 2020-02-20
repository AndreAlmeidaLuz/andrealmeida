<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){

      $registros = Curso::all();
      return view('admin.cursos.index',compact('registros'));
    }

    public function adicionar(){   // funcção para adicionar
      return view('admin.cursos.adicionar');

    }
    public function salvar(Request $req){  //função para salvar
      $dados = $req->all();
        //dd($dados);    motrarar os valores que está pegando atraves do 'dados'

          //saber se existe o checkbox publicado
        if (isset($dados['publicado'])) {
          $dados['publicado'] = 'sim';
        }
        else {
          $dados['publicado'] = 'nao';
        }
                 //tratando a imagem
        if ($req->hasFile('imagem')) {
          $imagem = $req->file('imagem');

          $num = rand(1111,2222);   //gerando um numero randomico para servir como nome da imagem no banco de dados
          $dir = "img/cursos/";                      //diretorio onde ira salvar a imagem
          $extensao = $imagem->guessClientExtension();  //extensao da imagem
          $nomeimagem = "imagem_".$num.".".$extensao;   //nome da imagem
          $imagem->move($dir,$nomeimagem);     //movendo imagem para um diretorio
          $dados['imagem'] = $dir."/".$nomeimagem;  //caminho da imagem para salvar no banco
        }
        Curso::create($dados); //salvando tudo no banco de dados

        return redirect()->route('admin.cursos');   //redirecionando para a pagina 'admin.cursos'
    }

    public function editar($id){
      $registro = Curso::find($id);
      return view('admin.cursos.editar',compact('registro'));

    }

    public function atualizar(Request $req, $id){  //função para salvar
      $dados = $req->all();
        //dd($dados);    motrarar os valores que está pegando atraves do 'dados'

          //saber se existe o checkbox publicado
        if (isset($dados['publicado'])) {
          $dados['publicado'] = 'sim';
        }
        else {
          $dados['publicado'] = 'nao';
        }
                 //tratando a imagem
        if ($req->hasFile('imagem')) {
          $imagem = $req->file('imagem');

          $num = rand(1111,2222);   //gerando um numero randomico para servir como nome da imagem no banco de dados
          $dir = "img/cursos/";                      //diretorio onde ira salvar a imagem
          $extensao = $imagem->guessClientExtension();  //extensao da imagem
          $nomeimagem = "imagem_".$num.".".$extensao;   //nome da imagem
          $imagem->move($dir,$nomeimagem);     //movendo imagem para um diretorio
          $dados['imagem'] = $dir."/".$nomeimagem;  //caminho da imagem para salvar no banco
        }
        Curso::find($id)->update($dados); //salvando tudo no banco de dados

        return redirect()->route('admin.cursos');   //redirecionando para a pagina 'admin.cursos'
    }

    public function deletar($id){
      Curso::find($id)->delete();      //'find': procura no banco de dados o id que foi passado

      return redirect()->route('admin.cursos');



    }




}
