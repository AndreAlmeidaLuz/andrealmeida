
<!DOCTYPE html>
<html>
<head>
  <title>Acesso ao Sistema</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/c76fa2deaa.js"></script>

<style type="text/css">
      #tamanho{
        width: 350px;
        
        -webkit-box-shadow: 10px 10px 20px 1px rgba(143,140,143,1);
        -moz-box-shadow: 10px 10px 20px 1px rgba(143,140,143,1);
        box-shadow: 10px 10px 20px 1px rgba(143,140,143,1)
      
      }

  

    </style>
</head>


<body>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
          <ul class="nav nav-pills">
  <li class="nav-item">
    <h5 class="nav-link active">Acesso ao Sistema</h5>
  </li>
  
  
</ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
         
          
          <div style="text-align: right;">
            
              <a class="nav-link js-scroll-trigger" href="/ProjetoAula2/Login_v6/index.php">Voltar</a>
            
              
    </nav>

    <div class= "container"  style="margin-top: 10px ;width: 450px">


     
<form class="needs-validation" novalidate action="../../Controller/ControllerInicial/dados.php" method="POST">
   
    
      
     
      <div style= "text-align: center;"> <h4> Cadastre-se</h4>
 <div class="alert alert-primary" role="alert">
  Cadastre-se em nosso sistema e tenha acesso a nossa plataforma gratúita.
</div>
</div>
        

  <div class=" form-group">  
      <label for="validationCustom01">Nome</label>
      <input type="text" name="nome" type="razao" class="form-control" id="validationCustom01" placeholder="Nome completo"  required>
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>

     
      <div class="row">
        <div class="col-md-7 ">
     <div class=" form-group">
      <label for="validationCustom02">Email</label>
      <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="exemplo@exemplo.com" required minlength="5">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha com um email válido.
      </div>
    </div>
  </div>
   
    
      <div class="col-md-5">
      <div class="form-group">
      <label for="validationCustom04">Celular</label>
      <input type="number" name="telefone" class="form-control" id="validationCustom04" placeholder="00 00000 0000" required minlength="11">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
    </div>
    </div>
  
    <div class="form-group">
      <label for="validationCustomUsername">Endereço</label>
      <div class="input-group">
        <input type="text" name="endereco" class="form-control" id="validationCustomUsername" placeholder="Endereço" aria-describedby="inputGroupPrepend" required minlength="4">
         <div class="valid-feedback">
        Campo correto!
      </div>
        <div class="invalid-feedback">
          Preencha o campo.
        </div>
      </div>
    </div>
    
  
    <div class="form-group">
      <label for="validationCustom04">Login</label>
      <input type="text" name="login"  class="form-control" id="validationCustom04" placeholder="Login de acesso" required minlength="6">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        O Login precisa ter no mínimo 6 caracteres.
      </div>
    </div>
  

    <div class=" row ">
    
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Senha</label>
      <input type="password" name="senha" id="txtSenha" class="form-control" id="validationCustom05" placeholder="Senha" required minlength="6">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
       A senha precisa ter no mínimo 6 caracteres.
      </div>
    </div>

     <div class="col-md-6 mb-3">
      <label >Confirmar senha</label>
      <input type="password" name="senhaconfirma" class="form-control" placeholder="Confirmar senha" oninput="validaSenha(this)" required minlength="6">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
       As senhas não se coincidem.
      </div>
    </div>
  </div>
  
  <div style="text-align: right;">
  <button name=" botao"  style="  margin-bottom: 10px" class="btn btn-sm btn-primary " type="submit">Cadastre-se</button>

    

</div>
</form>
</div>
</div>

<?php

require_once "../rodape.php";
?>


<script>
  function validaSenha (input){ 
  if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>