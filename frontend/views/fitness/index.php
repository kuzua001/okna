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
?>
<section class="fitness-gym"  id="section4">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
                        Кардио зона и тренажерный зал
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop">
                <div class="col l4 m12 s12">
                    <div class="card-element">
                        <header class="pale">
                            Тренажерный зал
                        </header>
                        <section class="content">
                            <p>
								Современный фитнес-клуб в центре города, ориентированный на тех, кому дорого и здоровье и время.
								Мы предлагаем стратегический подход к спорту: каждый наш специалист сделает все, чтобы вы достигли не просто кратковременных результатов, а улучшили образ жизни в целом.
                            </p>
                        </section>
                        <header class="pale">
                            Соверемнное оборудование
                        </header>
                        <section class="content">
                            <p>
								Новые фитнес-технологии позволяют по-новому взглянуть на достижение целей, а инфраструктура спортклуба — полезно организовать время.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col l8  m12 s12">
                    <div class="slider-element one-slide">
                        <img src="/img/shutterstock/kardio.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fitness-spa"  id="section4">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
                        Бассейн с зонами релаксации
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop reverse-order">
                <div class="col l4 m12 s12">
                    <div class="card-element">
                        <header class="pale">
                            Бассейн
                        </header>
                        <section class="content">
                            <p>
								Бассейн оснащен новейшей системой очистки Silvertronix без использования хлора.
								Безупречное состояние воды обеспечивается за счет метода многоступенчатой фильтрации и насыщения ионами серебра и меди.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col l8  m12 s12">
                    <div class="slider-element one-slide">
                        <img src="/img/shutterstock/spa.jpg">
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
                        Вокруг города расположены четыре международных аэропорта и один, обслуживающий только внутренние рейсы.
                    </p>
                    <p>
						Расстояние от отеля до ближайшего аэропорта - 14км, такси стоит 1000 рублей и довезет вас до отеля всего за пол часа.
					</p>
                </div>
            </div>
        </div>
    </div>
</section>
