<?php


require "./lib/autoload.php";

$smarty = new Smarty();



$smarty->assign("nome","Giovani Moura Messias");

$smarty->setTemplateDir('view/');
$smarty->setCompileDir('view/compiler/');
$smarty->setCacheDir('view/cache/');

$smarty->display('index.tpl');

?>