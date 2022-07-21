<?php 

	require "usuario.model.php";
	require "usuario.service.php";
	require "conexao.php";
	
	
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
	
	
	if ($acao == 'inserir'){

		if ($_POST['senha'] === $_POST['senha2']){
			$usuario = new Usuario();				

			$usuario->__set('nome', $_POST['nome']);
			$usuario->__set('sobrenome', $_POST['sobrenome']);
			$usuario->__set('email', $_POST['email']);
			$usuario->__set('senha', $_POST['senha']);

			$conexao = new Conexao();
			$servico = new UsuarioService($conexao, $usuario);
	
			$servico->inserir();

			header('Location: pagina.php');
		}else{
			header('Location: index.php?registro=falha');
		}
	}
	

 ?>