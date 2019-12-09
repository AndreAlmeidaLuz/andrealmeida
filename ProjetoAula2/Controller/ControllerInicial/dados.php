<?php
session_start();
ob_start();
if(!isset($_SESSION['logado'])){
header("location:login.php");
}
require_once "../../Model/ModelInicial/Operacoes.php";


$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$senhaconfirma = $_POST["senhaconfirma"];
$botao = $_POST["botao"];
  
$acao = new Operacoes();

$acao->setNome($nome);
$acao->setEmail($email);
$acao->setEndereco($endereco);
$acao->setTelefone($telefone);
$acao->setLogin($login);
$acao->setSenha($senha);
$acao->setSenhaconfirma($senhaconfirma);


 
$acao->cadastrar();





