<?php
use frontend\components\AppHelper;
use frontend\widgets\common\MainRestaurantSection;
?>
<?php

echo MainRestaurantSection::widget([
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
    'mainSloganFirst' => 'Авторская кухня',
    'mainSloganSecond' => 'от шеф-повора',
    'mainSloganThird' => 'Фёдора Гадалова',
]);

?>
<section class="restaurant-dessert"  id="section4">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
						изысканная кухня
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop">
                <div class="col l4 m12 s12">
                    <div class="card-element">
                        <header class="pale">
                            Кухня нашего ресторана
                        </header>
                        <section class="content">
                            <p>
								Гастрономическая кухня от шеф-повора Федора Гадалова базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.
								Ресторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col l8  m12 s12">
                    <div class="slider-element one-slide">
                        <img src="/img/shutterstock/dessert.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-restaurant"  id="section4">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
						Ресторан «Бежица»
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop reverse-order">
                <div class="col l4 m12 s12">
                    <div class="card-element">
                        <header class="pale">
                            О нашем ресторане
                        </header>
                        <section class="content">
                            <p>
								Ресторан "Бежица" это идеальное место расположенное недалеко от центра  для проведения вашего  изысканного банкета или свадебного торжества! К вашем услугам : просторный банкетный и фуршетный зал, использование нашего светового
								и музыкального оборудования и конечно же приветливый персонал.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col l8  m12 s12">
                    <div class="slider-element one-slide">
                        <img src="/img/shutterstock/restaurant.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map">
    <div class="content-wrapper">
        <h2 class="centered-title-element black-text">Как добраться</h2>
    </div>
    <div class="map-element">
        <div class="map"></div>
        <div class="contact-info content-wrapper">
            <div class="container container-90">
                <div class="wrapper">
                    <h3>Контактная информация</h3>
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
                    <h3>Расположение и транспорт</h3>
                    <p>
						Расстояние от отеля до ближайшего аэропорта - 14км, такси стоит 1000 рублей и довезет вас до отеля всего за пол часа.
					</p>
                </div>
            </div>
        </div>
    </div>
</section>
