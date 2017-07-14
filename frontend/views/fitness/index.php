<?php
use frontend\components\AppHelper;
use frontend\widgets\common\MainFitnessSection;
use frontend\widgets\common\StyleFitnessSection;
?>
<?php

echo MainFitnessSection::widget([
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
    'mainSloganFirst' => AppHelper::getText('mainSloganFirst'),
    'mainSloganSecond' => AppHelper::getText('mainSloganSecond'),
    'mainSloganThird' => AppHelper::getText('mainSloganThird'),
]);

echo StyleFitnessSection::widget([]);