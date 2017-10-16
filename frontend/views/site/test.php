<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section class="main" id="section1">
    <div class="content-wrapper">
        <img class="bg" src="/img/top-bg.jpg">
        <div class="container container-90">
            <div class="row clear indent indent-large">
                <div class="col l4 center desktop-only">
                    <img class="logo" src="/img/big-logo.png">
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
                        <span class="first">Ваш</span>
                        <span class="second">изысканный и комфортный отдых</span>
                        <span class="third">мирового класса</span>
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
<section class="service"  id="section2">
    <div class="content-wrapper">
        <img class="bg" src="/img/section2-bg.jpg">
        <div class="container container-90">
            <div class="row indent indent-large">
                <div class="col l6">
                    <h2 class="elegant-title-element">
                        <span class="first">Роскошный</span>
                        <span class="second">сервис для</span>
                        <span class="third tight">требовательных гостей</span>
                    </h2>
                    <button class="detail-button-element">
                        подробнее про отель
                    </button>
                </div>
                <div class="col l6">
                    <div class="right-content-block-element">
                        <h3>Обслуживание гостей</h3>
                        <p>
                            Услуги для гостей отеля «Бежица», включают удобства парковки и транспортировки из отеля в аэропорт на люкс автомобиле.
                            Гость может воспользываться подключением беспроводного интернета, а также услугами круглосуточного обслуживания в номерах,
                            услугами няни, и сервисом по аренде автомобилей и лимузинов. 
                        </p>
                    </div>
                    <div class="right-content-block-element">
                        <h3>Привелегии для гостей</h3>
                        <p>
                            После прекрасного ночного отдыха в роскошных интерьерах, встречайте утро свежим завтраком и никуда не спешите,
                            ведь у вас есть возможность выехать из отеля позже.
                        </p>
                    </div>
                    <div class="card-element">
                        <header>
                            Почему стоит бронировать у нас?
                        </header>
                        <section class="content">
                            <p>
                                Услуги для гостей отеля «Бежица», включают удобства парковки и транспортировки из отеля в аэропорт на люкс автомобиле.
                                Гость может воспользываться подключением беспроводного интернета, а также услугами <!--круглосуточного обслуживания в номерах,
                                            услугами няни, и сервисом по аренде автомобилей и лимузинов.-->
                            </p>
                            <ul class="item-list three-col">
                                <li class="item">
                                    <i class="item-icon" style="background-image: url('/img/icons/emblem.png');"></i>
                                    <p>
                                        Гарантия<br>
                                        лучших тарифов
                                    </p>
                                </li>
                                <li class="item">
                                    <i class="item-icon" style="background-image: url('/img/icons/service.png');"></i>
                                    <p>
                                        Круглосуточное<br>
                                        обслуживание в номерах
                                    </p>
                                </li>
                                <li class="item">
                                    <i class="item-icon" style="background-image: url('/img/icons/fitnes.png');"></i>
                                    <p>
                                        Оздоровительный<br>
                                        финес центр
                                    </p>
                                </li>
                            </ul>
                            <p>
                                Роскошный дизайн интерьеров, высокая кухня ресторана, светские и деловые события.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l12 m12 s12">
                    <h3 class="centered-title-element rooms">
                        Номера
                    </h3>
                </div>
            </div>
            <div class="row rooms-row">
                <div class="col l4 m12 s12 rooms-first-col">
                    <div class="card-element">
                        <header class="pale">
                            Сведения об отеле
                        </header>
                        <section class="content">
                            <ul>
                                <li><span>Время заезда: 14:00. Время выезда: 12:00</span></li>
                                <li><span>214 номеров и люксов</span></li>
                                <li><span>Сейф в каждом номере</span></li>
                                <li><span>Эксклюзивный клубный лаунж Bezhitsa lobby</span></li>
                                <li><span>Бесплатный беспроводной Интернет в зонах общего пользования и номерах</span></li>
                                <li><span>Круглосуточное обслуживание в номерах</span></li>
                                <li><span>Категория SPG 4</span></li>
                            </ul>
                        </section>
                        <header class="pale">
                            Описание отеля
                        </header>
                        <section class="content">
                            <ul>
                                <li><span>Круглосуточный фитнес</span></li>
                                <li><span>Все фитнес-занятия проходят под наблюдением профессиональных инструкторов</span></li>
                                <li><span>Владеющий иностранными языками персонал</span></li>
                                <li><span>Услуги няни по предварительной договоренности</span></li>
                                <li><span>Прачечная и химчистка в тот же день</span></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="col l8 m12 s12 rooms-list-element">
                    <div class="row">
                        <div class="col l6 m6 s12">
                            <div class="room-card-element">
                                <header>
                                    <img src="/img/room1.png" />
                                </header>
                                <section class="content">
                                    <div class="room-type">
                                        <h4 class="name">Люкс</h4>
                                        <span class="square">20-24 кв.м</span>
                                    </div>
                                    <div class="price-item">
                                        от <span class="price">7 600</span> руб
                                    </div>
                                </section>
                                <footer>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/one-bed.png">
                                        <span class="property-description">1 двуспальная кровать</span>
                                    </div>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/2people.png">
                                        <span class="property-description">2 гостя</span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <div class="col l6 m6 s12">
                            <div class="room-card-element">
                                <header>
                                    <img src="/img/room2.png" />
                                </header>
                                <section class="content">
                                    <div class="room-type">
                                        <h4 class="name">Стандарт</h4>
                                        <span class="square">30-36 кв.м</span>
                                    </div>
                                    <div class="price-item">
                                        от <span class="price">5 000</span> руб
                                    </div>
                                </section>
                                <footer>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/one-bed.png">
                                        <span class="property-description">1 двуспальная кровать</span>
                                    </div>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/2people.png">
                                        <span class="property-description">2 гостя</span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <div class="col l6 m6 s12">
                            <div class="room-card-element">
                                <header>
                                    <img src="/img/room1.png" />
                                </header>
                                <section class="content">
                                    <div class="room-type">
                                        <h4 class="name">Стандарт</h4>
                                        <span class="square">20-24 кв.м</span>
                                    </div>
                                    <div class="price-item">
                                        от <span class="price">6 800</span> руб
                                    </div>
                                </section>
                                <footer>
                                    <div class="property-item-element large-icon">
                                        <img class="property-icon" src="/img/icons/two-bed.png">
                                        <span class="property-description">2 односпальных кровати</span>
                                    </div>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/2people.png">
                                        <span class="property-description">2 гостя</span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <div class="col l6 m6 s12">
                            <div class="room-card-element">
                                <header>
                                    <img src="/img/room1.png" />
                                </header>
                                <section class="content">
                                    <div class="room-type">
                                        <h4 class="name">Стандарт</h4>
                                        <span class="square">20-24 кв.м</span>
                                    </div>
                                    <div class="price-item">
                                        от <span class="price">7 600</span> руб
                                    </div>
                                </section>
                                <footer>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/one-bed.png">
                                        <span class="property-description">1 двуспальная кровать</span>
                                    </div>
                                    <div class="property-item-element">
                                        <img class="property-icon" src="/img/icons/2people.png">
                                        <span class="property-description">2 гостя</span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row more-row">
                <div class="col l12 center">
                    <button class="detail-button-element">все номера номера</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="events"  id="section3">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
                        Мероприятия и свадьбы
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop">
                <div class="col l8 m12 s12">
                    <div class="slider slider-element">
                        <ul class="slides">
                            <li>
                                <img src="/img/canteen.jpg">
                                <div class="caption left-align">
                                    <h3 class="elegant-title-element small black-text">
                                        <span class="first">Европейская</span>
                                        <span class="second">Высокая кухня</span>
                                        <span class="third">незабываемая атмосфера</span>
                                    </h3>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/clock.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">12-24 ч. ежедневно</span>
                                    </div>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/phone.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">+7 (499) 678-01-41</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="/img/canteen.jpg">
                                <div class="caption left-align">
                                    <h3 class="elegant-title-element small black-text">
                                        <span class="first">Европейская</span>
                                        <span class="second">Высокая кухня</span>
                                        <span class="third">незабываемая атмосфера</span>
                                    </h3>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/clock.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">12-24 ч. ежедневно</span>
                                    </div>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/phone.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">+7 (499) 678-01-42</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="/img/canteen.jpg">
                                <div class="caption left-align">
                                    <h3 class="elegant-title-element small black-text">
                                        <span class="first">Европейская</span>
                                        <span class="second">Высокая кухня</span>
                                        <span class="third">незабываемая атмосфера</span>
                                    </h3>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/clock.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">12-24 ч. ежедневно</span>
                                    </div>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/phone.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">+7 (499) 678-01-43</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col l4  m12 s12">
                    <div class="elegant-card-element">
						<ul class="tab-list-element">
							<li>
								<span class="link">Лобби бар</span>
								<section class="content">
									<p>
										Гастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>
										Ресторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.
									</p>
									<p>
										<em>
											Идеально для изысканного банкета или свадебного торжества!
										</em>
									</p>
									<p class="increased-margin">
										Шеф-повар – Фёдор Гадалов.
									</p>
								</section>
							</li>
							<li class="active">
								<span class="link">Ресторан "Бежица"</span>
								<section class="content">
									<p>
										Гастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>
										Ресторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.
									</p>
									<p>
										<em>
											Идеально для изысканного банкета или свадебного торжества!
										</em>
									</p>
									<p class="increased-margin">
										Шеф-повар – Фёдор Гадалов.
									</p>
								</section>
							</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="row more-row">
                <div class="col l12 center">
                    <button class="detail-button-element black-text">узнать больше</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fitness"  id="section4">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
                        Фитнес центр
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop reverse-order">
                <div class="col l4 m12 s12">
                    <div class="card-element">
                        <header class="pale">
                            Фитнес центр
                        </header>
                        <section class="content">
                            <p>
                                Современный фитнес-клуб в центре города, ориентированный на тех, кому дорого и здоровье и время.
                                Мы предлагаем стратегический подход к спорту: каждый наш специалист сделает все, чтобы вы достигли не просто кратковременных результатов, а улучшили образ жизни в целом.
                            </p>
                            <p>
                                <em>
                                    Это стиль жизни, стремление быть лучше.
                                </em>
                            </p>
                            <p class="increased-margin">
                                Новые фитнес-технологии позволяют по-новому взглянуть на достижение целей, а инфраструктура спортклуба — полезно организовать время.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col l8  m12 s12">
                    <div class="slider slider-element">
                        <ul class="slides">
                            <li>
                                <img src="/img/fitness.jpg">
                                <div class="caption left-align top right">
                                    <h3 class="elegant-title-element small black-text">
                                        <span class="first">Новейший</span>
                                        <span class="second">фитнес-клуб</span>
                                        <span class="third">международного уровня</span>
                                    </h3>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/2people.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">12-24 ч. ежедневно</span>
                                    </div>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/2people.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">+7 (499) 678-01-41</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="/img/fitness.jpg">
                                <div class="caption left-align top right">
                                    <h3 class="elegant-title-element small black-text">
                                        <span class="first">Новейший</span>
                                        <span class="second">фитнес-клуб</span>
                                        <span class="third">международного уровня</span>
                                    </h3>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/2people.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">12-24 ч. ежедневно</span>
                                    </div>
                                    <div class="property-item-element">
                                        <i class="property-icon" style="background-image: url('/img/icons/2people.png'); width: 22px; height: 27px;"></i>
                                        <span class="property-description">+7 (499) 678-01-41</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row more-row">
                <div class="col l12 center">
                    <a href="http://bzfit.ru">
						<button class="detail-button-element black-text">узнать больше</button>
					</a>
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
							8(4832)40-00-00
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