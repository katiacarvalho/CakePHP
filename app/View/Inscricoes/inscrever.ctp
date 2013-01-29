<h1> Inscrição do Evento </h1>
<?php
    echo $this->Form->create('Inscricao', array('action' => 'inscrever'));
    echo $this->Form->input('nome');
    echo $this->Form->input('email', array('placeholder' => 'email@gmail.com'));
    echo $this->Form->input('telefone', array('maxlenght' => '11', 'placeholder' => '6399999999'));
    echo $this->Form->input('endereco');
    echo $this->Form->submit('Cadastrar');
    echo $this->Form->end();
?>
