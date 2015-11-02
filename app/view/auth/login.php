<?php

echo "Seja Bem vindo a tela de login";

?>

<form method="post" action="<?=URL?>login/dologin">
    
    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
    <input type="password" class="form-control" login="senha" name="senha" placeholder="Password">
    
    <input type="submit" class="btn btn-success" value="Login">
    
</form>
