<?php
session_start();
ob_start();
require_once "../../Model/ModelCliente/Dados.php";
#require_once "Validar.php";


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$valor = $_POST["valor"];
$botao = $_POST["botao"];

 

$dadoscliente = new Dados();

$dadoscliente->setNome($nome);
$dadoscliente->setCpf($cpf);
$dadoscliente->setTelefone($telefone);
$dadoscliente->setEndereco($endereco);
$dadoscliente->setNumero($numero);
$dadoscliente->setBairro($bairro);
$dadoscliente->setCidade($cidade);
$dadoscliente->setEstado($estado);
$dadoscliente->setEmail($email);
$dadoscliente->setValor($valor);



/*
$validar = new Validar();

$_SESSION['nome']=$validar->validarCampo("Nome", $nome, 60, 4);
$_SESSION['cpf']= $validar->validarCpf($cpf);
$_SESSION['endereco']= $validar->validarCampo("Endereço", $endereco, 60, 5);
$_SESSION['validar_numero']= $validar->validarNumero("Número", $numero);
$_SESSION['numero']= $validar->validarCampo("Número", $numero, 8, 1);
$_SESSION['bairro']= $validar->validarCampo("Bairro", $bairro, 50, 4);
$_SESSION['cidade']= $validar->validarCampo("Cidade", $cidade, 30, 2);
$_SESSION['estado']= $validar->validarCampo("Estado", $estado, 15, 3);
$_SESSION['email']= $validar->validarEmail($email);
$_SESSION['telefone']= $validar->validarNumero("Telefone", $telefone);
$_SESSION['valor']= $validar->validarNumero("Valor", $valor);

	header("location:../../View/ViewCliente/form.inserir.cliente.php"); 

*/


if($botao=="Cadastrar") {
        
$dadoscliente->cadastrar();

}
if ($botao=="Alterar") {
	 $id= $_POST["id"];
    $dadoscliente->alterar($id);

}

 
   
  








#if($botao =="Cadastrar"){
#$dadoscliente->cadastrar();
#}


#else if($botao=="Alterar"){
   # $id= $_POST["id"];
    #$dadoscliente->alterar($id);
#}

