<?php
session_start();
ob_start();
if(!isset($_SESSION['logado'])){
header("location:/ProjetoAula2/Login_v6/index.php");
}

require_once "../../Model/ModelInicial/Operacoes.php";
require_once "Validacao.php";
$login = $_POST["login"];
$senha = $_POST["senha"];


$logar = new Operacoes();



$validacao = new Validacao();

$_SESSION['validacao_login']=$validacao->validarCampo("login", $login, 50, 2);

$_SESSION['validacao_senha']=$validacao->validarCampo("senha", $senha, 45, 6);

header("location:/ProjetoAula2/Login_v6/index.php");


if($validacao->verifica()){
    

$logar->verificar();
}

