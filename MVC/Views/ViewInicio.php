<?php
require_once('./libs/Smarty.class.php');
class ViewInicio {
    function __construct(){
    }
    public function DisplayInicio(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Inicio");
        $smarty->assign('BASE',URL_DESTINO);
        $smarty->display('./templates/Inicio.tpl');
    }
}
?>