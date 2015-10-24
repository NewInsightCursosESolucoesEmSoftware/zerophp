<?php

?>

<h1>Adicionar Ator</h1>


<form action="<?=URL?>ator/post_adicionar" method="post">
  <div class="form-group">
    <label for="nome_ator">Nome do Ator:</label>
    <input type="text" class="form-control" name="nome_ator" id="nome_ator" placeholder="Nome do Ator">
  </div>
 
  <button type="submit" class="btn btn-default">Adicionar</button>
</form>