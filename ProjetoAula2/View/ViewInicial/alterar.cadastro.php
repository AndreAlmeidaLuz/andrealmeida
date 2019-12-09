<?php
 require_once"../modelo/cabecalho.php";
require_once"../classe/Operacoes.php";

$id = $_GET['id'];
$dados = new Operacoes();
$busca = $dados->buscar($id);

?>

<h5 class="titulo"> Editar Cadastro</h5>
<form action="dados.php" method="POST"> 

    <div class="formulario"> <!-- inicio div Formulario -->

        <div class="form-group">
            <input type="hidden" name="id" value = "<?= $busca['idcadastro']?>">	
            
            <label for="nome" class="required"> <b>Nome <b/></label>
            <input type="text" class="form-control" name="nome" value="<?= $busca['nome'] ?>" /> 
        </div>  

        <div class="form-group">
            <label for="email" class="required"> <b>Email<b/> </label>
            <input type="text" class="form-control" name="email" value="<?=$busca['email'] ?>" />
        </div>


        <div class="form-group">
            <label for="endereco" class="required"> <b>Endereço<b/></label>
            <input type="text" class="form-control" name="endereco" value="<?= $busca['endereco'] ?>"/>
        </div>

          <div class="form-group">
            <label for="telefone" class="required"> <b>Telefone<b/></label>
            <input type="text" class="form-control" name="telefone" value="<?= $busca['telefone'] ?>"/>
        </div>

          <div class="form-group">
            <label for="login" class="required"> <b>Login<b/></label>
            <input type="text" class="form-control" name="login" value="<?= $busca['login'] ?>"/>
        </div>

          <div class="form-group">
            <label for="senha" class="required"> <b>Senha<b/></label>
            <input type="text" class="form-control" name="senha" value="<?= $busca['senha'] ?>"/>
        </div>

          <div class="form-group">
            <label for="senhaconfirma" class="required"> <b>Confirmar Senha<b/></label>
            <input type="text" class="form-control" name="senhaconfirma" value="<?= $busca['senha_confirma'] ?>"/>
        </div>

        <input type="submit" class="btn btn-danger" name="botao" value="Alterar" />
    </div> <!-- Fim div formulario -->
</form>

<?php
require_once "../modelo/rodape.php";



