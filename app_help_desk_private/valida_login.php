<?php

	session_start();


	
	//varialvel para vericar se a autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => "Administrativo", 2 =>"Usuário");

	$usuarios_app = array(
		array('id' => 1, 'email' => 'beethoven_hv@hotmail.com', 'senha' => '123','perfil_id' => 1),
		array('id' => 2,'email' => 'beethoven_h_v@hotmail.com', 'senha' => '123','perfil_id' => 1),
		array('id' => 3,'email' => 'jose@hotmail.com', 'senha' => '123','perfil_id' => 2),
		array('id' => 4,'email' => 'maria@hotmail.com', 'senha' => '123','perfil_id' => 2),
 	);


	foreach ($usuarios_app as $user) {

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id']; 
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

		if ($usuario_autenticado) {
			echo "Usuario autenticado";
			$_SESSION['autenticado'] = 'SIM';
			$_SESSION['id'] = $usuario_id;
			$_SESSION['perfil_id'] = $usuario_perfil_id;
			header('Location: home.php'); //força redirecionamento 	
		}else{
			$_SESSION['autenticado'] = 'NAO';
			header('Location: index.php?login=erro');
		}

		echo "<hr>";

	/*
	print_r($_GET);

	echo '<br/>';

	echo $_GET['email'];
	echo '<br/>'
	echo $_GET['senha'];
	*/

?>