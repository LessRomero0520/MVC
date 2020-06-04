<?php
	function Autoload($carga)
    {
        if(is_file('Controller/'.$carga.'.Controller.php'))
        {
            require_once('Controller/'.$carga.'.Controller.php');
        }
        else if(is_file('Model/Class.'.$carga.'.Class.php'))
        {
            require_once('Model/Class.'.$carga.'.Class.php');
        }
        else if(is_file('Librerias/'.$carga.'.lib.php'))
        {
            require_once ('Librerias/'.$carga.'.lib.php');

        }
        else if(is_file('Framework/Smarty'.$carga.'.class.php'))
        {
            require_once('Framework/Smarty'.$carga.'.class.php');
            
        }
        else    
        {
            echo "<br>el autoload no carga";
        }
    }
    
    spl_autoload_register('Autoload');
?>