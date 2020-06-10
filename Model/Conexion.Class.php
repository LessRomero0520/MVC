<?php
     class Conexion extends mysqli 
     {
	   public function __construct()
       {
            
            $servidor="localhost";
            $pass="";
            $user="root";
            $db="mvc2";
            
            parent::__construct($servidor,$user,$pass,$db);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion') : $error="<br/>Conectado con la base de datos: ".$db;
            echo  $error;
			unset($error);
       }
     }
?>