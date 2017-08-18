<?php
use frontend\models\Product;
?>
<section class="delivery">
	<div class="content-wrapper">
		<div class="container container-90">
			<div class="row">
				<div class="col-lg-4 waitress-element hidden-sm hidden-xs">
					<img class="waitress" src="/img/sushi/girl-delivery.png">
				</div>
				<div class="col-lg-8">
					<div class="shop-front-element">
						<div class="wrapper">
							<img class="waiter" src="/img/sushi/podnos.png">
							<div class="products-slider-element">
								<ul class="image" rn-carousel rn-carousel-controls rn-carousel-buffered>
                                    <?php foreach(Product::getTop() as $item) { ?>
										<li class="slide product-card-element small">
											<h3 class="title">
                                                <?= $item->name ?> <span class="weight"><?= $item->weight ?> гр.</span>
											</h3>
											<img src="<?= $item->img ?>">
											<div class="add-to-cart">
												<span class="price"><?= $item->price ?> Руб.</span>
												<div class="input-group">
										  		<span class="input-group-btn">
											  		<button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]">
														-
											  		</button>
										  		</span>
													<input type="text" name="quant[2]" class="form-control input-number" value="0" min="1" max="100">
													<span class="input-group-btn">
													<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
														+
													</button>
												</span>
												</div>
											</div>
										</li>
                                    <?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="description">
						<h3 class="text-default">
							Доставка еды из <br>ресторана "Калипсо"
						</h3>
						<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModalLive">
							Весь каталог
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>