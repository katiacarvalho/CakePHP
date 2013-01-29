<?php

class PalestrantesController extends AppController{
    
    public function index(){
        
        //recebe as informações de palestrantes
        $palestrantes = $this->Palestrante->find('all'); 
        
        //'palestrantes' = faz referencia na pasta da view | $palestrantes = faz referência a variável do find()
        //joga o valor de $palestras na view palestrantes
        $this->set('palestrantes', $palestrantes);        
        
    }
    
    /*recebe o parametro q não tem ligação direta c o model! pq foi definido na rota q vai passar o id, define e faz a busca read()*/
    public function view($id = null){ //action dinâmica para mostrar o nome dos palestrantes | url que contem informações que vão ser passadas para as actions dinamicamente
       
        $this->Palestrante->id = $id;
        $dados = $this->Palestrante->read(null,$id); //busca todos os dados de palestrantes 
        
        //manda os dados para a view
        $this->set('palestrante', $dados); // dentro da view tem: $palestrante ['Palestrante']['nome'] -- $palestrante que vem do primeiro argumento, nome do model e o nome do campo
    }

    public function cadastrar(){
        
        $isPost = $this->request->isPost();      
      
        // Se é um POST e recebemos dados do formulário
        if ($isPost && !empty($this->request->data)) {
          
            // Tenta salvar os dados da inscrição
            if ($this->Palestrante->save($this->request->data)) {
            
                // Registro inserido com sucesso!
                $this->redirect(array('controller' => 'Palestrantes' , 'action' => 'index'));
            }
        }
    } 
}
?>
