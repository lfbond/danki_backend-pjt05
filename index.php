<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>
	
	<div class="sucesso">Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="images/ajax-loader.gif" />
	</div><!--overlay-loading-->

	<header>
		<div class="container">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--container-->
	</header>

	<div class="container-principal">
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'sobre' && $url != 'depoimentos' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	?>

	</div><!--container-principal-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="container">
			<p>Todos os direitos reservados</p>
		</div><!--container-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php
		if($url == 'contato'){
	?>
	<?php } ?>
	<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>