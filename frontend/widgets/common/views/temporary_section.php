<?php
use frontend\widgets\common\MainSection;
use yii\helpers\Html;

/** @var MainSection $widget */

$widget = $this->context;
?>
<section class="main" style="position: relative;">
	<div class="content-wrapper">
		<img class="bg" src="/img/top-bg.jpg">
		<div class="container container-90">
			<div class="row clear indent">
				<div class="col l4 center desktop-only">
					<img src="/img/big-logo.png">
					<h1>
						<span class="name">Bezhitsa</span><br>
						<span class="type">гранд отель</span>
					</h1>
				</div>
				<div class="col l5 greeting">
					<p class="header">
						<b>Добро пожаловать!</b>
					</p>
					<p class="content">
						Получите удовольствие, выбрав восхитительную<br>атмосферу премиум комплекса «Бежица».
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
							8(4832)40-00-00
						</dd>
					</dl>
				</div>
			</div>
			<div class="row clear">
				<div class="dummy-text-element col l8 push-l4">
					<h2 style="font-size: 50px; margin-top: 20px; line-height: 50px; margin-bottom: 40px;">СКОРО ОТКРЫТИЕ</h2>
				</div>
			</div>
		</div>
	</div>
	<p style="position: absolute; bottom: 20px; text-align: center; left: 0; right: 0;">
		По вопросам сотрудничества : <a href="mailto:siyanovich.a@mail.ru">siyanovich.a@mail.ru</a>
	</p>
</section>