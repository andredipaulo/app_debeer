<?php
    require "../config/conexao.php";
	require "../models/Usuario.php";
	require "../services/UsuarioService.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if ($acao == 'inserir'){

        if ($_POST['senha'] === $_POST['senha2']){

            $usuario = new Usuario();
            $conexao = new Conexao();
            $servico = new UsuarioService($conexao, $usuario);

            $usuario->__set('nome', $_POST['nome']);
            $usuario->__set('sobrenome', $_POST['sobrenome']);
            $usuario->__set('email', $_POST['email']);
            $usuario->__set('senha', $_POST['senha']);

            $existe = $servico->inserir();

            if (empty($existe->email)){
                header('Location: ../web/pagina.php');
            }else{
                header('Location: ../index.php?registro=existe');
            }

        }else{
            header('Location: ../index.php?registro=falha');
        }

    }else if ($acao == 'login'){

        $usuario = new Usuario();
        $usuario->__set('email', $_POST['email']);
        $usuario->__set('senha', $_POST['senha']);

        $conexao = new Conexao();
        $servico = new UsuarioService($conexao, $usuario);

        $user = $servico->login();

        if (
            $user->email === $usuario->email &&
            $user->senha === $usuario->senha
        ){
            header('Location: ../web/pagina.php?user='.$user->id);
        }else{
            header('Location: ../index.php?login=erro');
        }

    }else if ($acao == 'upate'){

    }else if ($acao == 'delete'){

    }



 ?>