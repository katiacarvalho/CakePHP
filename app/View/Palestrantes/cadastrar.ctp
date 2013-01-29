<?php
    echo $this->Form->create('Palestrante', array('action' => 'cadastrar'));
    echo $this->Form->input('nome');
    echo $this->Form->input('descricao');
    echo $this->Form->input('site', array('placeholder' => 'www.exemplo.com.br'));
    echo $this->Form->submit('Cadastrar');
    echo $this->Form->end();
?>