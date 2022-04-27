<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg');" class="banner-single"></div><!--banner-single-->
	<div class="overlay"></div><!--overlay-->
		<div class="container">
		<form method="post">
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
		</div><!--container-->
		<div class="bullets"></div><!--bullets-->
</section><!--banner-principal-->

	<section class="descricao-autor">
		<div id="sobre" class="container">
		<div class="w50 left">
			<h2>Luís Felipe Bond</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div><!--w50-->
		<div class="w50 left">
			<!--Pegar imagem depois-->
			<img class="right" src="<?php echo INCLUDE_PATH; ?>images/luis_bond.jpg" />
		</div><!--w50-->
		<div class="clear"></div>
		</div><!--container-->
	</section><!--descricao-autor-->

	<section class="especialidades">
		
		<div class="container">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-address-book-o" aria-hidden="true"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-html5"></i></h3>
				<h4>HTML 5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-gg-circle"></i></h3>
				<h4>Javascript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->
			
			<div class="clear"></div>
		</div><!--container-->

	</section><!--especialidades-->

	<section class="extras">

		<div class="container">
		<div id="depoimentos" class="w50 left depoimentos-container">
			<h2 class="title">Depoimentos dos nossos clientes</h2>
			
			<div class="depoimento-single">
				<p class="depoimento-descricao">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<p class="nome-autor">Lorem ipsum</p>
			</div><!--depoimento-single-->
			<div class="depoimento-single">
				<p class="depoimento-descricao">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<p class="nome-autor">Lorem ipsum</p>
			</div><!--depoimento-single-->
			<div class="depoimento-single">
				<p class="depoimento-descricao">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<p class="nome-autor">Lorem ipsum</p>
			</div><!--depoimento-single-->
		</div><!--w50-->

		<div id="servicos" class="w50 left servicos-container">
			<h2 class="title">Serviços</h2>
			<div class="servicos">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
				</ul>
			</div><!--servicos-->
		</div><!--w50-->
		<div class="clear"></div>
	</div><!--container-->
</section><!--extras-->