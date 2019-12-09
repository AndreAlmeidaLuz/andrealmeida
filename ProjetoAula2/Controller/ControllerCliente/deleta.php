<?php
session_start();
require_once "../../Model/ModelCliente/Dados.php";
require_once ("../../Model/ConexaoBanco.php");

$id = $_GET['id'];

$deleta = new Dados();
$deleta->deletar($id);
?>