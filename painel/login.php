<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL;?>css/style.css">
		<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
		<title>Login do Painel</title>
	</head>
	<body>
		<div class="box-login">
			<?php
				if(isset($_POST['acao'])){
					$user = $_POST['user'];
					$password = $_POST['password'];
					$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
					$sql->execute(array($user,$password));
					if($sql->rowCount() == 1){
						$info = $sql->fetch();
						//Logamos com sucesso.
						$_SESSION['login'] = true;
						$_SESSION['user'] = $user;
						$_SESSION['password'] = $password;
						$_SESSION['cargo'] = $info['cargo'];
						$_SESSION['nome'] = $info['nome']; 
						$_SESSION['img'] = $info['img'];
						/* if(isset($_POST['lembrar'])){
							setcookie('lembrar',true,time()+(60*60*24),'/');
							setcookie('user',$user,time()+(60*60*24),'/');
							setcookie('password',$password,time()+(60*60*24),'/');
						} */
						header('Location: '.INCLUDE_PATH_PAINEL);
						die();
					}else{
						//Falhou
						echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
					}
				}
			?>
			<h2>Faça o seu login!!</h2>
			<form method="post" action="">
				<input type="text" name="user" id="user" placeholder="Login..." required>
				<input type="password" name="password" id="password" placeholder="Senha..." required>
				<input type="submit" name="acao" value="Logar!">
			</form><!-- fim form -->
		</div><!-- fim box-login -->
	</body>
</html>