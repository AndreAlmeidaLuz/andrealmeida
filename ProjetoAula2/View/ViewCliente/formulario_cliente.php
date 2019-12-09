<?php 
session_start();
if(!isset($_SESSION['logado'])){
header("location:/ProjetoAula2/Login_v6/index.php");
}


require_once "../cabecalho_atual.php";

 ?>



   <div style= "text-align: center;"> <h4> Cliente </h4>
 <div class="alert alert-primary" role="alert">
  Preencha o formulário para realizar o cadastro de um cliente
</div>
  <?php
    if(isset($_SESSION['sucesso_cadastro'])){
      echo $_SESSION['sucesso_cadastro'];
   unset ($_SESSION['sucesso_cadastro']);
  }
   if(isset($_SESSION['erro_cadastro_cliente'])){
      echo $_SESSION['erro_cadastro_cliente'];
   unset ($_SESSION['erro_cadastro_cliente']);
  }
  ?>
</div>


    <form class="needs-validation" novalidate action="../../Controller/ControllerCliente/pegardados.php" method="POST">
      <div class="col mb-3">
   <div class=" form-group">  
      <label for="validationCustom01">Nome</label>
      <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome completo"  required minlength="4" >
      <div class="valid-feedback">
        Campo correto!
      </div>
       <div class="invalid-feedback">
        Preencha este campo.
    </div>
    </div>
    
    <div class="  row"> 
      <div class="  col"> 
     <div class=" form-group">
      <label for="validationCustom02">CPF</label>
      <input type="text" name="cpf" class="form-control" id="validationCustom02" placeholder="_ _ _ . _ _ _ . _ _ _ - _ _" required minlength=" 11" maxlength=" 11" autocomplete=" of">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
    </div>
    </div>
    </div>
    
    <div class=" col-md-6 ">
      <label for="validationCustom04">Celular</label>
      <input type="number" name="telefone" class="form-control" id="validationCustom04" placeholder="00 00000 0000" required minlength="10" maxlength="12">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>
</div>


   <div class="row">
    <div class=" col">
    <div class="form-group">
      <label for="validationCustomUsername">Endereço</label>
      <div class="input-group">
        <input type="text" name="endereco" class="form-control" id="validationCustomUsername" placeholder="Endereço" aria-describedby="inputGroupPrepend" required minlength="10">
        <div class="valid-feedback">
        Campo correto!
      </div>
        <div class="invalid-feedback">
          Preencha este campo.
        </div>
      </div>
    </div>
  

</div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Número</label>
      <input type="number" name="numero" class="form-control" id="validationCustom04" placeholder="n°" required>
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>
  </div>

    <div class=" row ">
    
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Bairro</label>
      <input type="text" name="bairro" class="form-control" id="validationCustom05" placeholder="Bairro" required>
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>

     <div class="col-md-5 mb-3">
      <label for="validationCustom04">Cidade</label>
      <input type="Cidade" name="cidade" class="form-control" id="validationCustom04" placeholder="Cidade" required>
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>

  
       <div class="col-md-3 mb-3">
      <label for="validationCustom04">Estado</label>
      <select name="estado" class="form-control"   required>
        <option></option>
        <option value="Acre">AC</option>
      <option value="Alagoas">AL</option>
      <option value="Amapá">AP</option>
      <option value="Amazonas">AM</option>
      <option value="Bahia">BA</option>
       <option value="Ceará">CE</option>
      <option value="Distrito Federal">DF</option>
      <option value="Espírito Santo">ES</option>
      <option value="Goiás">GO</option>
      <option value="Maranhão">MA</option>
       <option value="Mato Grosso">MT</option>
      <option value="Mato Grosso do Sul">MS</option>
      <option value="Minas Gerais">MG</option>
      <option value="Pará"> PA</option>
      <option value="Paraíba">PB</option>
       <option value="Paraná">PR</option>
      <option value="Pernambuco">PE</option>
      <option value="Piauí">PI</option>
      <option value="Rio de Janeiro">RJ</option>
      <option value="Rio Grande do Norte">RN</option>
       <option value="Rio Grande do Sul">RS</option>
      <option value="Rondônia">RO</option>
      <option value="Roraima">RR</option>
      <option value="Santa Catarina">SC</option>
      <option value="São Paulo">SP</option>
       <option value="Sergipe">SE</option> 
      <option value="Tocantins">TO</option>
    </select>

     <div class="valid-feedback">
        Campo correto!
      </div>
       <div class="invalid-feedback">
        Preencha o campo.
      </div>    
    </div>
  
    </div>
     

<div class=" row ">
    
    <div class="col-md-8 mb-3">
<div class=" form-group">
      <label for="validationCustom02">Email</label>
      <input type="email" name="email"  class="form-control" id="validationCustom02" placeholder="exemplo@exemplo.com" required>
      <div class="valid-feedback">
        Campo correto!
      </div>
       <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>
  </div>

  <div class="col col-md-4 mb3">
<div class=" form-group">
      <label for="validationCustom02">Salário</label>
      <input type="text" name="valor" class="form-control" id="validationCustom02" placeholder="R$" required>
      <div class="valid-feedback">
        Campo correto!
      </div>
       <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>
  </div> 
</div>
 
 <div style="text-align: right;">
  <button name="botao" value="Cadastrar" style="  margin-bottom: 10px" class="btn btn-sm btn-primary " type="submit">Cadastrar Cliente</button>

    

</div>

</form>
</div>
</div>

 <!-- Footer -->
     
      <footer  style="margin-top: 1px ; margin-bottom: 100px ">
         <hr/>
          <p class="m-0 text-center">Andreus Technology &copy;</p>



<script>
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