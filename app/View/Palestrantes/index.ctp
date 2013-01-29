<?php
echo $this->Html->link('Novo Palestrante', array('controller' => 'Palestrantes', 'action' => 'cadastrar'))
?>
<table>
    
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Site</th>        
    </tr> 
    
    <?php foreach ($palestrantes as $palestrante): ?> <!--$palestrantes as $p-->
           
    <tr>
        <td><?php echo $palestrante['Palestrante']['nome']; ?></td> <!--$p['Palestrante']['nome']-->
        <td><?php echo $palestrante['Palestrante']['descricao']; ?></td>
        
        <?php 
        
        $texto = $palestrante['Palestrante']['site'];
        $linkTexto = $this->Text->autolink($texto);
        
        ?>
        
        <td><?php echo $linkTexto ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>