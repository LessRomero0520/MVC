<?php
	class Home 
    {
		public function Inicio()
        {
			echo "en clase home y metodo inicio";
        }

		public function User()
        {
			$user=new Usuarios();
			$user->BuscarUsuario();

			$class2=Librerias();
			$class2->Libreria1();
			$smarty =new Smarty();
        }
    }
?>