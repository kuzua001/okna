<?php
use frontend\widgets\common\BaseSection;
use frontend\widgets\common\MainSection;
use frontend\widgets\common\ServiceSection;
use frontend\widgets\common\TemporarySection;
use frontend\components\AppHelper;
use yii\helpers\Html;



/*echo MainSection::widget([
	'title' =>
		'<span class="name">Bezhitsa</span>
		<br>
		<span class="type">гранд отель</span>',
	'contactsList' => [
		[
			'class' => 'address',
			'title' => 'Адрес',
			'value' =>
				'<dd>
					Клинцовская, 41,<br>
					Брянск<br>
					Российская Федерация<br>
				</dd>',
		],
        [
            'class' => 'phone',
            'title' => 'Телефон',
            'value' => '+7 (915) 117-98-77',
        ],
	],
	'welcomeHeader' => AppHelper::getText('welcomeHeader', AppHelper::LANG_RU),
	'welcomeContent' =>
		'Получите удовольствие, выбрав восхитительную
		<br>
		атмосферу премиум комплекса «Бежица».',
	'mainSloganFirst' => AppHelper::getText('mainSloganFirst'),
    'mainSloganSecond' => AppHelper::getText('mainSloganSecond'),
    'mainSloganThird' => AppHelper::getText('mainSloganThird'),
	'rightBlockHeader' => 'Харакетристики отеля',
	'rightBlockContent' => 'Отель «Бежица» предлагает 48 роскошных номеров в самом центре города. Наслаждайтесь стильным интерьером, уникальным дизайном стандартных номеров, делюксов и люксов .',
]);

echo ServiceSection::widget([
	'title' => 'Номера',
	'content' => $this->render("//partial/blocks/service/content"),
	'roomsDescription' => $this->render("//partial/blocks/service/rooms_description"),
]);*/

echo TemporarySection::widget([

]);

//echo BaseSection::widget([
//	'title' => 'Поривет',
//	'content' => 'Привет, мир!'
//]);

?>