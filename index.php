<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../../web/css/logo.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<title>DeBeer</title>

</head>
<body>

	<nav class="navbar navbar-dark bg-dark">		
 		<a class="navbar-brand" href="index.php">
			<img src="img/logo/logo.png" width="50" height="50" class="d-inline-block align-top">
			Debeer	
		</a>		
	</nav>

    <? if (isset($_GET['registro']) && $_GET['registro'] == 'falha'){ ?>
        <div class="bg-danger pt-2 text-white d-flex justify-content-center">
            <h5>Falha ao registrar!</h5>           
        </div>
    <? } ?>

    <? if (isset($_GET['registro']) && $_GET['registro'] == 'existe'){ ?>
        <div class="bg-danger pt-2 text-white d-flex justify-content-center">
            <h5>Este e-mail já existe no banco de dados!</h5>
        </div>
    <? } ?>

    <? if (isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
        <div class="bg-danger pt-2 text-white d-flex justify-content-center">
            <h5>Falha ao entrar, tente novamente!</h5>
        </div>
    <? } ?>

	<div class="container login-container">
        <div class="row">            
            <div class="col-md-6 login-form-1">
                <h3>Entrar</h3>
                <form action="/controllers/UsuarioController.php?acao=login" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Seu e-mail" value="" name="email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Digite sua senha" value="" name="senha"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-info">Entrar</button>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btnForgetPwd">Esqueceu sua senha?</a>
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-form-2">                
                <h3>Registre-se</h3>
                <form action="../controllers/UsuarioController.php?acao=inserir" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome" value="" name="nome"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sobrenome" value="" name="sobrenome" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Seu e-mail" value="" name="email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Digite uma senha" value="" name="senha" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirme sua senha" value="" name="senha2" />
                    </div>
                    <div class="form-group">
                    	<button class="btn btn-lg btn-info">Registrar</button>	                     
                    </div>
                </form>    
            </div>

        </div>
    </div>
</body>
</html>