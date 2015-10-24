<?php
#editar.php
?>

<h1>Editar Ator</h1>


<form method="post" action="<?=URL?>ator/post_editar">
  <div class="form-group">
    <label for="nome_ator">Nome do Ator:</label>
    <input type="text" class="form-control" name="nome_ator" id="nome_ator" value="<?=$ator->nome_ator?>" placeholder="Nome do Ator">
    <input type="hidden" name="cod_ator" value="<?=$ator->cod_ator?>">
  </div>
  <button type="submit" class="btn btn-default">Editar</button>
</form>