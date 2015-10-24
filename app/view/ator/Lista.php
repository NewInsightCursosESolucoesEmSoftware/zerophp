<?php
/*
echo "view lista de atores";


echo "<pre>";

print_r($atores);
*/

?>


<h1>Lista de Atores</h1>
<a class="btn btn-success" href="<?=URL?>ator/adicionar">Adicionar Ator</a>

<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Editar</th>
        <th>Excluir</th>
    </thead>
        <?php
    
        foreach($atores as $ator){
    
    
        ?>
        <tr>
            <td>
                <?=$ator->cod_ator?>
            </td>
            
            <td>
                <?=$ator->nome_ator?>
            </td>
            
            <td>
                <a href="<?=URL?>ator/editar/?cod_ator=<?=$ator->cod_ator?>">Editar</a>
            </td>
            
             <td>
                <a href="<?=URL?>ator/excluir/?cod_ator=<?=$ator->cod_ator?>">Excluir</a>
            </td>
        
        </tr>
        
        <?php
        }
        ?>
    
    
    <tbody>
    
    
    </tbody>
    
</table>






