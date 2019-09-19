<?php
	
	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';	

	//remover indices do array de sessão, apenas se existir  
	//unset()
	
	//destruir a variavel da sessão
	//session_destroy()

	session_destroy();

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';	
	*/

	session_destroy();
	header('Location: index.php')

?>