
<?php
  //Template Name: inicio
?>
<?php get_header(); ?>

		<div class="container">
			<div class="row py-5 align-items-center">
				<div class="col-lg-5 mobile-flex text-center text-md-left div-animate d-flex align-items-end">
					<div class="text w-100 my-auto">
						<h3 class="mb-4">
							Invista em pecuária
							sem precisar ter uma fazenda.
						</h3>
						<h1 class="mb-4">
							Até <span>12% a.a</span> de rentabilidade
							garantido e livre de IR.
						</h1>
						<hr class="ml-md-0">
						<h3>
							direto ao ponto:
						</h3>
					</div>
				</div>
				<div class="col-lg-2">
				</div>
				<div id="home-seguro" class="col-lg-5 col relative align-self-center">
					<!-- form -->
          <?php 
            the_post();
            the_content();
          ?>
					<!-- <form method="post" novalidate="novalidate" data-status="init" id="contactForm">
						<h2 class="mb-4 mt-0 text-center">
							Quer investir e aproveitar
							as rentabilidades do bom
							do agro? Deixe seu contato:
						</h2>
						<div class="form-group">
							<input type="text" name="nome" class="form-control heigth-50 reverse" id="nome" required />
							<label for="nome">Nome</label>
						</div>

						<div class="form-group">
							<input type="text" name="email" class="form-control heigth-50 reverse" id="email" required />
							<label for="email">Email</label>
						</div>

						<div class="form-group">
							<input type="text" name="telefone" class="form-control heigth-50 reverse" minlength="14" maxlength="16"
								id="telefone" required />
							<label for="telefone">Telefone</label>
						</div>

						<div class="form-group mb-0">
							<input type="submit" class="btn btn-block btn-shadow-blue" value="Quero Saber Mais" />
							<span class="enviando"></span>
						</div>
					</form> -->


					<!-- <div id="form-message-warning" class="mt-4"></div>
					<div id="form-message-success">
						Sua mensagem foi enviada, Obrigado!
					</div>
					<h6 class="text-center text-description mt-5 px-2 px-md-5">
					</h6> -->
				</div>
			</div>
		</div>
	</div>

	<section class="section-video">
		<div class="container">
			<div class="row">

				<div class="col-md-8 d-flex mx-auto">
					<div class="intro color-2 d-lg-flex mx-auto shadow" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/first-video-img.jpeg);
																														background-repeat: no-repeat;
																														background-position: center center;
																														background-size: cover;
																														max-width: 615px;
																														">
						<div class="text slider-text w-100">
							<h2 class="text-dark">Assista:
								Um novo modelo
								de Negócio
							</h2>
							<a href="https://www.youtube.com/watch?v=FMWiJwLG0j4"
								class="img-video popup-vimeo d-flex align-items-center justify-content-center mx-auto">
								<span class="fa fa-play"></span>
							</a>
						</div>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g618.png" class="img-behind-video">
				</div>

			</div>
		</div>
	</section>

	<section class="section-who-is">
		<div class="container text-center">
			<div class="row who-is-fk justify-content-center pb-5 mb-4">
				<div class="col-md-12 div-animate">
					<h2>
						O que é a FK?
					</h2>
					<p>
						Somos a primeira Agtech do mercado com estrutura própria. Aliamos tecnologia, pecuária e investimentos em um
						único lugar. Invista em pecuária sem precisar ter uma fazenda.
					</p>
				</div>
			</div>
			<h2 class="pb-2">
				Como é o cálculo da minha rentabilidade?
			</h2>
			<div class="row row-values">
				<div class="col-md-4 px-3 justify-content-center div-animate d-flex">
					<h6>
						$10.000 - $50.000
					</h6>
					<div class="container-card"><span class="value-year">10% a.a.</span></div>
					<div class="secundario"></div>
				</div>
				<div class="col-md-4 px-3 justify-content-center div-animate d-flex">
					<h6>
						$50.000 - $100.000
					</h6>
					<div class="container-card"><span class="value-year">11% a.a.</span></div>
					<div class="secundario"></div>
				</div>
				<div class="col-md-4 px-3 justify-content-center div-animate d-flex">
					<h6>
						acima de $100k
					</h6>
					<div class="container-card"><span class="value-year">12% a.a.</span></div>
					<div class="secundario"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-security">
		<div class="container">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-verde.png" class="img-logo-verde" alt="logo">
			<div class="row">
				<div class="col-md-6">
					<h2 class="h2-boi">
						Quais as seguranças
						que tenho ao investir
						na FK?
					</h2>
				</div>
				<div class="col-md-6 px-md-5 div-animate py-0 py-md-5 order-2 order-md-1" style="align-self: flex-end;">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/boi-section.png" alt="imagem do boi" class="img-boi">
				</div>
				<div class="col-md-12 div-animate py-3 pt-md-5 order-1 order-md-2">
					<p>
						Todos os investimentos realizados na FK, são garantidos pela B3 (Bolsa de valores oficial do Brasil) e
						possuem
						garantia real. Isso é feito através de uma CPR-F, que garante ao investidor segurança e transparência ao
						realizar seu investimento.
					</p>
				</div>
			</div>
		</div>

		<div class="container position-relative" style="
			max-height: 860px;
			display: flex;
			justify-content: center;
			overflow: hidden;
		">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/notice-1.svg" data-jarallax-element="40" class="notice-img jarallax" alt="#">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/notice-2.svg" class="notice-img" alt="#">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/notice-3.svg" data-jarallax-element="-40" class="notice-img jarallax" alt="#">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/mapa-notices.svg" class="mapa-notices" alt="#">
		</div>

		<div class="container">

			<div class="row align-items-center">

				<div class="col-md-6 div-animate">
					<h2 class="mt-2">com a palavra
						nosso CFO
					</h2>
					<p>
						Hector Wild (CFO), comenta nosso modelo de negócio e te ajuda a entender melhor como você pode investir!
						Assista o vídeo!
					</p>
				</div>

				<div class="col-md-6 px-md-5">
					<div class="video-2 slider-text w-100 z-index-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/second-video-img.jpeg);
																																	background-repeat: no-repeat;
																																	background-position: center center;
																																	background-size: cover;
																																">
						<a href="https://www.youtube.com/watch?v=FMWiJwLG0j4"
							class="img-video second-video popup-vimeo d-flex align-items-center justify-content-center mx-auto">
							<span class="fa fa-play"></span>
						</a>
						<!-- <span class="img-video second-video popup-vimeo d-flex align-items-center justify-content-center mx-auto"> -->
						<!-- </span> -->
					</div>
					<div class="video-2 slider-text sombra	">
					</div>
				</div>

			</div>

		</div>
	</section>


	<!-- section do scroll X -->
	<section class="section-carousel">
		<div class="carousel slide" id="main-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">

				<div class="carousel-item active">
					<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-1.jpg">
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-2.jpg" alt="">
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-3.jpg" alt="">
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-4.jpg">
				</div>

			</div>

			<a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="sr-only" aria-hidden="true">Prev</span>
			</a>
			<a href="#main-carousel" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only" aria-hidden="true">Next</span>
			</a>
		</div>
	</section>

	<section class="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-center">
					<a class="btn shadow mb-5">
						Quero falar com um especialista da FK
					</a>
					<h2 class="div-animate text-white mb-3">
						Solidez
					</h2>
					<p class="div-animate">
						Com estrutura própria no coração do Brasil, estrategicamente localizada no centro do país em sinergia com
						ecossistema da região. A Fazenda FK possui equipe qualificada e estrutura robusta que garantem seu
						investimento seguro!
					</p>
				</div>
				<div class="col-md-12 d-flex justify-content-center align-items-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/balance.png" class="mx-auto" alt="menos risco com maior retorno">
				</div>
				<div class="col-md-12">
					<h2 class="text-green">
						Compare. Decida.
					</h2>
					<h2 class="text-white">
						Melhor do que renda fixa tradicional.<br>
						Menor risco que renda variável.
					</h2>
					<p>
						Diversifique sua carteira de investimentos com aplicações alternativas, invista em economia real.
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/chart.png" class="w-100">
				</div>
			</div>
		</div>
	</section>


	<section class="section-map">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/mapa.svg" alt="#">
	</section>


	<section class="section-explanation position-relative">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/etapas-not.svg" alt="imagem explicação da operação na pratica">
		<div class="container">

			<div class="row justify-content-center align-items-center">
				<div class="col-md-6 d-flex justify-content-center align-items-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Prancheta23_1.png" class="img-celular" alt="imagem celular">
				</div>
				<div class="col-md-3 col-info-cell d-flex flex-column div-animate">
					<div class="mb-4">
						<span>em breve</span> invista com a FK
					</div>
					<h3>
						um aplicativo
						pra você acompanhar
						os seus rendimentos.
					</h3>
				</div>
				<div class="col-md-3 col-info-cell d-flex flex-column">
				</div>
			</div>

			<div class="row mt-5 mt-md-0">
				<div class="col-md-12 d-flex flex-column">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b3.png" class="img-b3 mb-2 div-animate" alt="logo brasil bolsa balcao">
					<h3 class="h3-logo-b3 mt-4 mb-3 mb-md-5">
						Todos os investimentos possuem lastro
						em cabeças de gado, garantindo o
						investimento.
					</h3>
					<p>
						Criada pela Lei No 8.929 de 1994, a CPR é um título representativo de promessa de entrega futura de
						produto agropecuário e pode ser emitida pelo produtor rural ou suas associações, inclusive cooperativas.
					</p>
					<p>
						Atualmente este é o principal instrumento para financiamento da cadeia produtiva do agronegócio,
						pois permite ao seu emissor obter recursos para o desenvolvimento de suas produções rurais ou
						empreendimentos.
					</p>
				</div>
			</div>
		</div>

		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/last-bg.png" alt="imagem do brasil bolsa balcão" style="width: 100%; height: auto">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-12 d-flex align-items-center justify-content-center">
					<a href="/" class="btn mx-auto">
						Quero Falar com um especialista da FK
					</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
