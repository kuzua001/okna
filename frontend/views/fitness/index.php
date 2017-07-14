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
                'Клинцовская, 41,<br>
                Брянск<br>
                Российская Федерация<br>',
        ],
        [
            'class' => 'phone',
            'title' => 'Телефон',
            'value' => '8(4832)40-00-00',
        ],
    ],
    'mainSloganFirst' => 'специальные<br>цены',
    'mainSloganSecond' => 'на клубные карты',
    'mainSloganThird' => 'до открытия',
]);

echo StyleFitnessSection::widget([]);