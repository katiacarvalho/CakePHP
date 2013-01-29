<?php

class Palestrante extends AppModel{
    
    public $hasMany = array('Palestra');
    
    public $order = array('nome' => 'ASC');
    public $cacheQueries = true;
    public $displayField = 'nome';
    
    public $validate = array(
        
        'nome' => array( 
            array(
                'rule' => 'isUnique',
                'message' => 'O nome informado já existe'
            ),
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe seu nome'
            )
        ),
        'descricao' => array(
            'rule' => 'notEmpty',
            'message' => 'Informe a descricao'
        ),
        'site' => array(
            
            array(
                'rule' => 'url',
            )
        )
    );    
}
?>
<!--URL válida mas não obrigatória

required o campo deve estar presente

allowEmpty o campo pode ser salvo vazio-->