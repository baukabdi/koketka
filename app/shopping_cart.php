<?php include('header.php'); ?>

<!-- quos ego BEGIN -->
<main>
	<!-- Main Top BEGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?php include('sidebar_category.php'); ?>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10">
				<?php include('menu.php'); ?>

				<!-- Bread Crumbs START -->
				<nav class="bread_crumbs">
					<ul>
						<li><a href="index.php">Начало</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#0">Корзина</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-shopping_cart">
					<h1>Корзина</h1>
					<div class="cart_wrapper">
						<div class="cart_descr">
							<div class="left">
								<img src="assets/images/fotorama-1.png" alt="">
								<span class="cart_zoom">
									
								</span>
								<div class="ball">+10 баллов</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>