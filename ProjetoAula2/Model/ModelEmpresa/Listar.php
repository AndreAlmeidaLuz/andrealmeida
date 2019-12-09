<?php
require_once ("../../Model/ConexaoBanco.php");

class Listar{
	
function listar(){
    $conexao = new ConexaoBanco();
    $con = $conexao->conectar();
    
  
    $lista = array();
    $sql = "select * from empresa";
    $query = mysqli_query($con, $sql);
    
    while($usuario = mysqli_fetch_array($query)){
        array_push($lista, $usuario);
    }
    return $lista;
}


}

?>