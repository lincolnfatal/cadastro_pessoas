<?php
class database{
    
    private static $db;
    
    private  function __construct(){
       
        $db_host = "localhost";
        $db_base = "crud";
        $db_usuario = "root";
        $db_senha   = "";
        $db_driver  = "mysql";
        try{
            
            
            self::$db = new PDO("$db_driver:host=$db_host;dbname=$db_base;",$db_usuario,$db_senha); 
            # Garante que o PDO lance exceções durante erros.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
            self::$db->exec('SET NAMES utf8');
        } catch (Exception $ex) {
               echo "Erro".$ex;
        }
  
        
    }
    
    public static function conexao(){
        if(!self::$db){
            new database();
            
        }
        
        return self::$db;
    }
}
?>