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
						<li class="bread_crumb_currency"><a href="#0">Контакты</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-contacts">
					<div class="contacts_left">
						<h1>Как нас найти</h1>
						<div class="contacts_map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.812370288339!2d23.32442001546662!3d42.686516679166346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa850beec29ac9%3A0xb3a0d02a11b2087a!2z0YPQuy4g4oCe0JvRjtCx0LXQvSDQmtCw0YDQsNCy0LXQu9C-0LLigJwgNDgsIDExNDIg0KbQtdC90YLRitGALCDQodC-0YTQuNGPLCDQkdC-0LvQs9Cw0YDQuNGP!5e0!3m2!1sru!2skz!4v1583746130648!5m2!1sru!2skz" width="600" height="373" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>

						<div class="contacts_items">
							<p>ВАРНА, УЛ."ЛЮБЕН КАРАВЕЛОВ" 48</p>
							<p>ТЕЛ: +359 889 315 972</p>
							<p>ТЕЛ: +359 899 44 23 63</p>
							<p>MAIL: OFFICE@KOKETKA.BG</p>
						</div>
					</div>

					<div class="contacts_right">
						<form>
							<label for="your_name" class="required">Вашето име</label>
							<input type="text" id="your_name">

							<label for="your_email" class="required">Имейл</label>
							<input type="text" id="your_email">

							<label for="your_message" class="required">Вашето съобщение</label>
							<textarea id="your_message" cols="30" rows="10"></textarea>

							<button class="button_custom">изпрати</button>
						</form>
					</div>

				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>