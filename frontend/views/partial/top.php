<section class="header">
	<div class="content-wrapper">
		<header class="header-element">
			<div class="mobile-only">
				<div class="slide-dummy-element" ng-swipe-right="site.setMenuState(true)"></div>
				<div class="row">
					<div class="col s12">
						<span class="hamburger-element" ng-click="site.toggleMenu()">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</span>
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/sushi/logo-sm.png">
						</a>
					</div>
				</div>
			</div>
			<div class="desktop-only container container-90">
				<div class="row">
					<div class="col l4">
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/sushi/logo-big.png">
						</a>
					</div>
					<div class="header-menu col l5">
						<nav class="menu">
							<a class="item" ng-click="site.scrollBodyTo('section#section1')">рестораны</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section2')">столовые</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section3')">контакты</a>
							<a class="item" ng-click="site.scrollBodyTo('section#section4')">корзина</a>
						</nav>
					</div>
					<div class="lang-switcher col l3">
						<a>
							in english
						</a>
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