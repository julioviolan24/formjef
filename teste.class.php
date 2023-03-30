<?php

require_once("pessoa.class.php");

class Teste{
    
    private $pessoa;

    public function __construct(){
        
        $pessoa = new Pessoa();
      
        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome(). "<br>";

        $pessoa->setTelefone($_POST['telefone']);
        echo $pessoa->getTelefone(). "<br>";

        $pessoa->setOrigem($_POST['origem']);
        echo $pessoa->getOrigem(). "<br>";

        $pessoa->setDataContato($_POST['datacontato']);
        echo $pessoa->getDataContato(). "<br>";

         $pessoa->setObservacao($_POST['observacao']);
         echo $pessoa->getObservacao(). "<br>";
        
    }
}new Teste();

?>