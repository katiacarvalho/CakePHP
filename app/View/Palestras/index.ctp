<?php
echo $this->Html->link('Nova Palestra', array('controller' => 'Palestras', 'action' => 'cadastrar'))
?>
<table>
    
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th>Palestrante</th>
        <th>Início</th>
        <th>Fim</th>
    </tr> <!--$palestras as $p-->
    
    <?php foreach ($palestras as $palestra): 
        $slug = Inflector::slug(strtolower($palestra['Palestrante']['nome']), '-'); ?>     
       
    <tr>
        <td><?php echo $palestra['Palestra']['nome']; ?></td> <!--$p['Palestra']['nome']-->
        <td><?php echo $palestra['Palestra']['descricao']; ?></td>
        <td><?php echo $this->Html->link($palestra['Palestrante']['nome'], '/palestrantes/'.$slug.'/'.$palestra['Palestrante']['id'], array('class'=>'hover')) ?></td>
       <!-- <td><?php echo $palestra['Palestrante']['site']; ?></td>-->
        <td><?php echo $palestra['Palestra']['inicio']; ?></td>
        <td><?php echo $palestra['Palestra']['fim']; ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
