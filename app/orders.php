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
						<li class="bread_crumb_currency"><a href="#0">Поръчки</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-orders">
					<h1>Поръчки</h1>

					<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
						<thead>
							<tr>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span class="nobr">Поръчка</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Дата</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Статут</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Общо</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Действия</span></th>
							</tr>
						</thead>

						<tbody>
							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№90
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">20.02.2020</time>
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_delayed" data-title="Статут">
									Задържана
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount">лв. 43.00 за 2 продукта</span>
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№91								
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_sent">
									Отправлена
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№92								
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status waiting_payment">
									Ждет оплаты
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№93							
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_delayed">
									Задържана
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>