<?php
class Validacao {
	var $campo;
	var $valor;
	var $msg = array();
        
        
	
	// Mensagens de erro
	function mensagens($num, $campo, $max, $min) {
		
		$this->msg[0] = "<p class='alert alert-danger' role='alert'>Preencha o campo com um email válido </p>"; // EMAIL
		$this->msg[1] = "<p class='alert alert-danger' role='alert'>Telefone inválido (Ex: 01433333333) </p>"; // TELEFONE
		$this->msg[2] = "<p class='alert alert-danger' role='alert'>Preencha o campo ".$campo." com numeros </p>"; // APENAS NUMEROS
		$this->msg[3] = "<p class='alert alert-danger' role='alert'> Preencha o campo ".$campo." </p>"; // CAMPO VAZIO
		$this->msg[4] = "<p class='alert alert-danger' role='alert'> O ".$campo." deve ter no máximo ".$max." caracteres </p>"; // MÁXIMO DE CARACTERES
	
		$this->msg[5] = "<p class='alert alert-danger' role='alert'>O ".$campo." deve ter no mínimo ".$min." caracteres </p>"; // MÍNIMO DE CARACTERES
               $this->msg[6]= "<p class='alert alert-danger' role='alert'> Os campos 'Senha' e 'Confirmar senha' estão diferentes </p>";
		
		return $this->msg[$num];
	}
	
	// Validar Email
	function validarEmail($email) {
            
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return $this->mensagens(0, 'email', null, null);
		}
	}
	
	// Validar Telefone (01432363810)
	function validarTelefone($telefone) {
            
		if (!preg_match("^[0-9]{11}$", $telefone)) { 
			return $this->mensagens(1, 'telefone', null, null);
		}
	}
	
	// Validar Numero
	function validarNumero($campo,$numero) {
		if(!is_numeric($numero)) {
			return $this->mensagens(2, $campo, null, null);
		}
	}
	
  
        // Verificação simples (Campo vazio, maximo/minimo de caracteres)
	function validarCampo($campo, $valor, $max, $min) {
		$this->campo = $campo;
			if ($valor == "") {
				return $this->mensagens(3, $campo, $max, $min);
			} 
			elseif (strlen($valor) > $max) {
				return $this->mensagens(4, $campo, $max, $min);
			} 
			elseif (strlen($valor) < $min) {
				return $this->mensagens(5, $campo, $max, $min);	
			}
	}
	
	function validasenha($campo,$senha, $senhaconfirma, $max, $min){
	    if($senha != $senhaconfirma){
	        return $this->mensagens(6, $campo, null, null);
	    }
	    	elseif (strlen($senha) > $max) {
				return $this->mensagens(4, $campo, $max, $min);
			} 
	    	elseif (strlen($senha) < $min) {
				return $this->mensagens(5, $campo, $max, $min);	
			}
	}
	
	// Verifica se há erros
	function verifica() {
		if (sizeof($this->msg) == 0) {
			return true;
		} else {
			return false;
		}
	}
}

