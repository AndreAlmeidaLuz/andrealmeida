<?php

class ConexaoBanco {
    private $servidor; 
    private $usuario;
    private $senha;
    private $nomebanco;

    function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->nomebanco = "projeto";
    }

    function conectar() {
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->nomebanco);
        
        mysqli_set_charset($conexao, 'utf-8');
        
        
        return $conexao;
        
       
    }

}
