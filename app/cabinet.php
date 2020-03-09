<?php include('header.php'); ?>

<!-- quos ego BEGIN -->
<main>
	<!-- Main Top BEGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?php include('active_sidebar.php');?>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10">
				<?php include('menu.php'); ?>

				<!-- Bread Crumbs START -->
				<nav class="bread_crumbs">
					<ul>
						<li><a href="index.php">Начало</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#0">Личный кабинет</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-cabinet">
					<h1>Личный кабинет</h1>

					<p>Здраствуйте, <strong>Иван Иванович</strong> (не <strong>Иван Иванович?</strong> <a href="#0">Выйти</a>)</p>
					<p>От вашия профил да преглеждате <a href="#0">последните си поръчки</a>, да управлявате вашите <a href="#0">адреси за плащане и доставка</a> и <a href="#0">да променяте паролата и манните на прифила си</a></p>
				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>