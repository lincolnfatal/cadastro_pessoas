<?php 
include "conexao.php";
include "pessoas.php";
class dao{
    public function selecionar_nome($nome){
   
        try{
            $sql = "SELECT * FROM pessoas where nome = :nome LIMIT :limit";
            $p_sql =  database::conexao()->prepare($sql);
            $p_sql->bindValue(":nome",$nome);
            $p_sql->bindValue(":limit",10,PDO::PARAM_INT);
            $p_sql->execute();
            while($rs = $p_sql->fetch(PDO::FETCH_ASSOC)){
           
                $retorno[] = $this->popularDados($rs);
            }
            
            return $retorno;
           
        
        } catch (Exception $ex) {

        }
              
    }
    
    private function popularDados($rs){
     
        $dados = new pessoas();
        $dados->setId($rs['id']);
        $dados->setNome($rs['nome']);
        $dados->setEmail($rs['email']);
        $dados->setId_uf($rs['id_uf']);
        
        return $dados;
    }
}