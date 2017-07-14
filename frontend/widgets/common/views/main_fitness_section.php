<?php
use frontend\widgets\common\MainSection;
use yii\helpers\Html;

/** @var MainSection $widget */

$widget = $this->context;
?>
<section class="fitness-main">
	<div class="content-wrapper">
		<img class="bg large" src="/img/backgrounds/top-fitness-bg.jpg">
		<div class="container container-90">
			<div class="row clear indent">
				<div class="col l4 center desktop-only">
					<img class="logo" src="/img/big-logo-black.png">
					<h1>
						<span class="name">Bezhitsa</span><br>
						<span class="type">фитнес</span>
					</h1>
				</div>
				<div class="col l5 greeting">
					<p class="header">
						<b>
						<?= $widget->welcomeHeader ?>
						</b>
					</p>
					<p class="content">
						<?= $widget->welcomeContent ?>
					</p>
				</div>
				<div class="col l3">
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
						<span class="first">Роскошный</span>
						<span class="second">сервис для</span>
						<span class="third tight">требовательных гостей</span>
					</h2>
					<button class="detail-button-element">
						подробнее про отель
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