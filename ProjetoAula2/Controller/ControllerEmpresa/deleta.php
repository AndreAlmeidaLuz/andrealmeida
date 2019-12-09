<?php
session_start();
require_once "../../Model/ModelEmpresa/Dados.php";
require_once ("../../Model/ConexaoBanco.php");

$id = $_GET['id'];

$empresa = new Empresa();

$empresa->deletar($id);


?>
