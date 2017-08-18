<?php
use frontend\widgets\section\Section;
use frontend\models\pages\HotelMainSectionParams;
use yii\helpers\Html;

/** @var Section $widget */

$widget = $this->context;

/**
 * @var HotelMainSectionParams $sectionParams
 */
$sectionParams = $widget->sectionParams;
?>
<section class="main" id="section1">
	<div class="content-wrapper">
		<img class="bg" src="/img/top-bg.jpg">
		<div class="container container-90">
			<div class="row clear indent indent-large">
				<div class="col l4 center desktop-only">
					<img class="logo" src="/img/sushi/logo-big.png">
					<h1>
						<span class="name">Bezhitsa</span><br>
						<span class="type"><?= Html::encode($sectionParams->mainHeaderTypePart) ?></span>
					</h1>
				</div>
				<div class="col l5 greeting">
					<p class="header">
						<b><?= Html::encode($sectionParams->greetingHeader) ?></b>
					</p>
					<p class="content">
                        <?= Html::encode($sectionParams->greetingContent) ?>
					</p>
				</div>
				<div class="col l3">
					<dl class="contacts-element">
						<dt title="Адрес">
							<i class="address"></i>
						</dt>
						<dd>
							Клинцовская, 41,<br>
							Брянск<br>
							Российская Федерация<br>
						</dd>
						<dt title="Телефон">
							<i class="phone"></i>
						</dt>
						<dd>
							+7 (915) 117-98-77
						</dd>
					</dl>
				</div>
			</div>
			<div class="row clear indent indent-large middle-row">
				<div class="col l4 m4 center">
					<section class="reservation-form-element">
						<header>
							Забронировать проживание
						</header>
						<section class="content">
							<div class="dates">
								<input type="text" class="from" placeholder="заезд">
								<input type="text" class="to" placeholder="выезд">
							</div>
							<div class="people">
								<input type="text" class="select" placeholder="1 Номер, 1 Взрослый, 0 Детей">
								<!-- redmine test -->

							</div>
						</section>
						<footer>
							<div class="apply">Бронировать</div>
						</footer>
					</section>
				</div>
				<div class="col l8 m8">
					<h2 class="main-slogan elegant-title-element">
						<span class="first"><?= Html::encode($sectionParams->sloganFirst) ?></span>
						<span class="second"><?= Html::encode($sectionParams->sloganSecond) ?></span>
						<span class="third"><?= Html::encode($sectionParams->sloganThird) ?></span>
					</h2>
				</div>
			</div>
			<div class="row clear">
				<div class="col push-l6 ml6 push-m4 m8">
					<div class="right-content-block-element">
						<h3>Харакетристики отеля</h3>
						<p>
							Отель «Бежица» предлагает 48 роскошных номеров в самом центре города. Наслаждайтесь стильным интерьером, уникальным дизайном стандартных номеров, делюксов и люксов .
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>