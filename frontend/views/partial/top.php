<section class="header">
	<div class="content-wrapper">
		<header class="header-element">
			<div class="mobile-only">
				<div class="slide-dummy-element" ng-swipe-right="site.setMenuState(true)"></div>
				<div class="row">
					<div class="col-sm-12">
						<span class="hamburger-element" ng-click="site.toggleMenu()">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</span>
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/sushi/logo-sm.png">
						</a>
						<div class="cart-element small" onclick="showModal('exampleModalLive')">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							<span ng-cloak class="count" ng-class="{ 'empty' : !site.getCart().quantity }">{{ site.getCart().quantity }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="desktop-only container container-90">
				<div class="row">
					<div class="col-lg-4">
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/sushi/logo-big.png">
						</a>
					</div>
					<div class="header-menu col-lg-5">
						<nav class="menu">
							<a class="item" ng-click="site.scrollBodyTo('section#section1')">рестораны</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section2')">столовые</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section3')">контакты</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section4')">корзина</a>
						</nav>
					</div>
					<div class="cart-element small col-lg-3" onclick="showModal('exampleModalLive')">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<span ng-cloak class="count" ng-class="{ 'empty' : !site.getCart().quantity }">{{ site.getCart().quantity }}</span>
					</div>
				</div>
			</div>
		</header>
	</div>
</section>
<div class="slide-menu-element mobile-only" ng-class="{'active':site.slideMenuState}" ng-swipe-left="site.setMenuState(false)">
	<nav class="menu">
		<a class="item" ng-click="site.setMenuState(false); site.scrollBodyTo('section#section1')">рестораны</a>
		<a class="item" ng-click="site.setMenuState(false); site.scrollBodyTo('section#section2')">столовые</a>
		<a class="item" ng-click="site.setMenuState(false); site.scrollBodyTo('section#section3')">контакты</a>
		<a class="item" ng-click="site.setMenuState(false); site.scrollBodyTo('section#section4')">корзина</a>
	</nav>
</div>