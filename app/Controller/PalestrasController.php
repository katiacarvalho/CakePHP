<?php

class PalestrasController extends AppController{
    
    public function index(){
        
        //recebe as informações de palestras
        $palestras = $this->Palestra->find('all'); 
        
        //'palestras' = faz referencia na pasta da view | $palestras = faz referência a variável do find()
        //joga o valor de $palestras na view palestras
        $this->set('palestras', $palestras);        
        
    }
    
    public function cadastrar(){
        
        $isPost = $this->request->isPost();      
      
        // Se é um POST e recebemos dados do formulário
        if ($isPost && !empty($this->request->data)) {
          
            // Tenta salvar os dados da inscrição
            if ($this->Palestra->save($this->request->data)) {
            
                // Registro inserido com sucesso!
                $this->redirect(array('controller' => 'Palestras' , 'action' => 'index'));
               // $this->render(index);
            }
        }
        
        $palestrantes = $this->Palestra->Palestrante->find('list', array('fields' => array ('id','nome')));
        $this->set(compact('palestrantes'));
        
        /* COMO MOSTRAR CAMPOS COM VALORES DE OUTRO MODEL 
        $palestrantes = $this->Palestra->Palestrante->findfind('list', array('fields' => array ('id','nome')));
        $this->set(compact('palestrantes')); */
    }  
    
}
?>
