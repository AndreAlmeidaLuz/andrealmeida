<?php
session_start();
if(!isset($_SESSION['logado'])){
header("location:/ProjetoAula2/Login_v6/index.php");
}
require_once"../cabecalho_atual.php";
require_once "../../Model/ModelEmpresa/Dados.php";

$id = $_GET['id'];

$dados = new Empresa();

$busca = $dados->buscar($id);


?>

 <div style= "text-align: center;"> <h4> Empresa </h4>
 <div class="alert alert-primary" role="alert">
  Alterar dados do cliente.
</div>
  
  </div>
<form  action="../../Controller/ControllerEmpresa/acoes.php" method="POST" class="needs-validation" novalidate>

   <div class="form-group">
            <input type="hidden" name="id" value = "<?= $busca['idempresa']?>">	
            

   <div class=" form-group">  
      <label for="validationCustom01">Razão Social</label>
      <input type="text" name="razao" type="razao" class="form-control" id="validationCustom01" placeholder="Razão Social da empresa"  required value="<?= $busca['razao_social'] ?>">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>

     <div class=" form-group">  
      <label for="validationCustom01">Nome Fantasia </label>
      <input type="text" name="nome" type="nome" class="form-control" id="validationCustom01" placeholder="Nome da empresa"  required value="<?= $busca['nome_fantasia'] ?>">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
    
    <div class="  row"> 
      <div class="  col"> 
     <div class=" form-group">
      <label for="validationCustom02">CNPJ</label>
      <input type="text" name="cnpj" class="form-control" id="validationCustom02" placeholder="_ _ _ . _ _ _ . _ _ _ - _ _" required value="<?=$busca['cnpj'] ?>">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
    </div>
    
    <div class=" col-md-6 ">
      <label for="validationCustom04">Celular</label>
      <input type="number" name="telefone" class="form-control" id="validationCustom04" placeholder="00 00000 0000" required value="<?=$busca['telefone'] ?>">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
</div>


   <div class="row">
    <div class=" col">
    <div class="form-group">
      <label for="validationCustomUsername">Endereço</label>
      <div class="input-group">
        <input type="text" name="endereco" class="form-control" id="validationCustomUsername" placeholder="Endereço" aria-describedby="inputGroupPrepend" required value="<?=$busca['endereco'] ?>">
         <div class="valid-feedback">
        Campo correto!
      </div>
        <div class="invalid-feedback">
          Preencha o campo.
        </div>
      </div>
    </div>
  

</div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Número</label>
      <input type="number" name="numero" class="form-control" id="validationCustom04" placeholder="n°" required  value="<?=$busca['numero'] ?>">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
  </div>

    <div class=" row ">
    
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Bairro</label>
      <input type="text" name="bairro" class="form-control" id="validationCustom05" placeholder="Bairro" required value="<?=$busca['bairro'] ?>">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
       Preencha o campo.
      </div>
    </div>

     <div class="col-md-5 mb-3">
      <label for="validationCustom04">Cidade</label>
      <input type="Cidade" name="cidade" class="form-control" id="validationCustom04" placeholder="Cidade" required value="<?=$busca['cidade'] ?>">
       <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha o campo.
      </div>
    </div>
  
       <div class="col-md-3 mb-3">
      <label for="validationCustom04">Estado</label>
      <select  name="estado" class="form-control" id="validationCustom04"  required value="<?=$busca['estado'] ?>">
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

<div class=" form-group">
      <label for="validationCustom02">Email</label>
      <input type="email" name="email"  class="form-control" id="validationCustom02" placeholder="exemplo@exemplo.com" required  value="<?=$busca['email'] ?>" >
      <div class="valid-feedback">
        Campo correto!
      </div>
       <div class="invalid-feedback">
        Preencha o campo.
      </div>   
    </div>
  

      
  
 

  <div class="  form-group">
      <label for="validationCustom04">Responsável</label>
      <input type="text" name="responsavel" class="form-control" id="validationCustom04" placeholder="Nome do responsável" required value="<?= $busca['responsavel'] ?>">
      <div class="valid-feedback">
        Campo correto!
      </div>
      <div class="invalid-feedback">
        Preencha este campo.
      </div>
    </div>


  <div style="text-align: right;">
  <button name=" botao" value="Alterar" style="  margin-bottom: 10px" class="btn btn-sm btn-primary " type="submit">Alterar dados</button>

    

</div>
</form>
</div>
</div>

<?php

require_once "../rodape.php";
?>


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
