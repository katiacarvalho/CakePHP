<?php

class InscricoesController extends AppController{
    
    public function inscrever(){
      $isPost = $this->request->isPost();      
      // Se é um POST e recebemos dados do formulário
      if ($isPost && !empty($this->request->data)) {
          // Tenta salvar os dados da inscrição
          if ($this->Inscricao->save($this->request->data)) {
              // Registro inserido com sucesso!
              $this->redirect('/obrigada');
          }
      }
    }    
}
?>
