<?php

class Palestra extends AppModel{
    
    public $belongsTo = array('Palestrante');
    
    public $order = array('inicio' => 'ASC');
    public $cacheQueries = true;
    public $displayField = 'nome';
    
    public $validate = array(
        
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe o nome da palestra'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'O nome informado já existe'
            )
        ),
        'descricao' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe a descricao da palestra'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'A descricao informada já existe'
            )
        ),
        'inicio' => array(
            'rule' => '/([0-9]+):([0-9]+)/',
            'message'=>'Informar a hora no seguinte formato HH:MM'
        ),
        'fim' => array(
            'rule' => '/([0-9]+):([0-9]+)/',
            'message'=>'Informar a hora no seguinte formato HH:MM'
        )
   );
            
            
}
?>