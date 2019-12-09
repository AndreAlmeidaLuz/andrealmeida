<?php
session_start();
ob_start();
#require_once "classe/Mensagens.php";
if((!isset($_SESSION['login'])==true)and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
   
    #header("location:formulario/login.php");
    header("location:/ProjetoAula2/Login_v6/index.php");
}
$logado = $_SESSION['login'];
echo "<font color = 'black'> <h4>Seja bem vindo $logado </h4> </font>";

header("location:../../View/ViewInicial/opcao.php");




?>