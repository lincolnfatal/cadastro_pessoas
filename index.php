<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include "dao.php";


 $dados = new dao();

$rt = $dados->selecionar_nome("lincoln");

foreach($rt as $rs){
    echo $rs->getId();
    echo $rs->getNome();
    echo $rs->getEmail();
    echo $rs->getId_uf();
    echo "<br />";
}
 