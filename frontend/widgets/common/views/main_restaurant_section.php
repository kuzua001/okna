<?php
use frontend\widgets\common\MainSection;
use yii\helpers\Html;

/** @var MainSection $widget */

$widget = $this->context;
?>
<section class="restaurant-main">
	<div class="content-wrapper">
		<img class="bg large" src="/img/backgrounds/top-restaurant-bg.jpg">
		<div class="container container-90">
			<div class="row clear indent">
				<div class="col l4 center desktop-only">
					<img class="logo" src="/img/big-logo-black.png">
					<h1>
						<span class="name">Бежица</span><br>
						<span class="type">ресторан</span>
					</h1>
				</div>
				<div class="col l3 push-l5 s12">
					<?php if (count($widget->contactsList)) { ?>
						<dl class="contacts-element">
							<?php foreach($widget->contactsList as $item) { ?>
								<dt title="<?= $item['title'] ?>">
									<i class="<?= $item['class'] ?> black-icon"></i>
								</dt>
								<dd>
									<?= $item['value'] ?>
								</dd>
							<?php } ?>
						</dl>
					<?php } ?>
				</div>
			</div>
			<div class="row clear indent indent-large middle-row">
				<div class="col l8 s12">
					<h2 class="elegant-title-element">
						<span class="first"><?= $widget->mainSloganFirst ?></span>
						<span class="second"><?= $widget->mainSloganSecond ?></span>
						<span class="third tight"><?= $widget->mainSloganThird ?></span>
					</h2>
					<button class="detail-button-element black-text">
						подробнее
					</button>
				</div>
			</div>
			<div class="row clear">
				<div class="col push-l6 ml6 push-m4 m8">
					<div class="right-content-block-element">
						<h3>
							<?= $widget->rightBlockHeader ?>
						</h3>
						<p>
                            <?= $widget->rightBlockContent ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>