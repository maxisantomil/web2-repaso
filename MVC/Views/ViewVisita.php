<?php
require_once('./libs/Smarty.class.php');
class ViewVisita {
    function __construct(){
    }
    public function DisplayVisita($destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Destinos");
        $smarty->assign('BASE',BASE);
        $smarty->assign('ver_destinos',$destinos);
        $smarty->display('./templates/visita.tpl');
    }

    public function DisplayVisitaHoteles($hoteles){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Hoteles");
        $smarty->assign('BASE',BASE);
        $smarty->assign('ver_hoteles',$hoteles);
        $smarty->display('./templates/visita_hoteles.tpl');
    }
}
?>