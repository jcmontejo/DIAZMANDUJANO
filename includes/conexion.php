<?php 
	try {
			$base = new PDO('mysql:host=localhost; dbname=_diazmandujano', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
			$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		
	} catch (Exception $e) {
		die('Error: ' .$e->GetMessage());
	}
	/*
	usuario servidor = diazmand_ingejc
	password = 9aJuIvehN_BO
	*/
 ?>