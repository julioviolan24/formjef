<?php
//Classe com o nome Pessoa
class Pessoa{
   
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    
          public function getNome(){
          return $this->nome;
    }
    
             public function setNome($nome){
              $this->nome = $nome;
    }
 
              public function getTelefone(){
              return $this->telefone;
    }
   
           public function setTelefone($telefone){
             $this->telefone = $telefone;
    }
  
            public function getOrigem(){
               return $this->origem;
    }
           public function setOrigem($origem){
              $this->origem = $origem;
    }
  
             public function getDataContato(){
              return $this->DataContato;
    }
     
           public function setDataContato($DataContato){
             $this->DataContato = $DataContato;
    }
    
            public function getObservacao(){
              return $this->observacao;
    }
           public function setObservacao($observacao){
              $this->observacao = $observacao;
    }
}

?>