<?php


require "./lib/autoload.php";

$smarty = new Template();



$smarty->assign("nome","Giovani Moura Messias");

Rota::get_Pagina();

$smarty->display('index.tpl');

?>