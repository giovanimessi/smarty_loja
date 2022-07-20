<?php

class Rota{

    //criar um metodo static 

    static function get_Pagina(){

        if(isset($_GET['pag'])):
            $barra = DIRECTORY_SEPARATOR;

            $pagina = 'controller'.$barra .$_GET['pag']. '.php';

           

            if(file_exists($pagina)):

                include $pagina;

            else:

                //echo "Arquivo nao encontrado:".$pagina;
               include 'error.php';

            endif;
        endif;
    }

}



?>