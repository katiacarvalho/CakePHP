<?php
    class Inscricao extends AppModel {
        
        public $order = array('nome' => 'ASC');
        public $cacheQueries = true;
        public $displayField = 'nome';

        public $validate = array(
            
            'nome' => array( 
                array(
                    'rule' => 'notEmpty',
                    'message' => 'Informe seu nome'
                ),
                array(
                    'rule' => 'isUnique',
                    'message' => 'O nome informado já existe'
                )
            ),   
            'telefone' => array(
                array(
                    'rule' => 'notEmpty',
                    'message' => 'Informe seu telefone'
                ),
                array(
                    'rule' => 'numeric',
                    'message' => 'Informe somente números'
                )
            ),                
            'endereco' => array(
                array(
                    'rule' => 'notEmpty',
                    'message' => 'Informe o endereço'
                ),
                array(
                    'rule' => array('minLength', '10'),
                    'message' => array('Informe no minímo 10 caracteres')
                )
            ),
            'email' => array(
                'verifica_vazio' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Informe seu email'
                ),
                'verifica_email' => array(
                        'rule' => 'email',
                        'message' => 'O email informado estar em um formato inválido'
                ),
                'verifica_unico' => array(
                        'rule' => 'isUnique',
                        'message' => 'O email informado já existe'
                )
        )
       );
}

//<!--/@([A-Za-z0-9_]+)/ ---- Não verifica texto antes do @-->
//<!--^[a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9\-]+[a-zA-Z]+\.[a-zA-Z]+(\.[a-zA-Z]+){0,1}$/-->
