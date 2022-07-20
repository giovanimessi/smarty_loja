<?php


class Template extends Smarty{

    function __construct(){
        parent:: __construct();

        $this->setTemplateDir('view/'); //view
        $this->setCompileDir('view/compiler/'); //compilador
        $this->setCacheDir('view/cache/');//cache



    }

}


?>