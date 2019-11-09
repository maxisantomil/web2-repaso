<?php

require_once('./libs/Smarty.class.php');


class ViewUser {

    function __construct(){

    }

    public function DisplayLogin(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE',URL_DESTINO);
        $smarty->display('./templates/login.tpl');
    }
}

