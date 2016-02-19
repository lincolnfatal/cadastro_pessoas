<?php
class pessoas{
    
    private $id;
    private $nome;
    private $email;
    private $id_uf;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        
    }
    
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
        
    }
    
    
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        
    }
    
    public function getId_uf(){
        return $this->id_uf;
    }
    public function setId_uf($id_uf){
        $this->id_uf = $id_uf;
        
    }
}