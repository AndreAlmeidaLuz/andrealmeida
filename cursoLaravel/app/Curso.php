<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $fillable = [
      'titulo', 'descricao', 'valor','imagem', 'publicado' //atribuindo os valores pegos no controle às tabelas no banco de dados
  ];
}
