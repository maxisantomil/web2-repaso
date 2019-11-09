<?php
require_once('./libs/Smarty.class.php');
class ViewRegistro {
    function __construct(){
    }
    public function DisplayRegistro(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Registrese");
        $smarty->assign('BASE',URL_DESTINO);
        $smarty->display('./templates/datosUser.tpl');
    }
}    
?>