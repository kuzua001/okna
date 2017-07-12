<section class="header">
	<div class="content-wrapper">
		<header class="header-element">
			<div class="mobile-only">
				<div class="slide-dummy-element" ng-swipe-right="header.setState(true)"></div>
				<div class="row">
					<div class="col s12">
						<span class="hamburger-element" ng-click="header.toggleMenu()">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</span>
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/logo_header_mobile.png">
						</a>
					</div>
				</div>
			</div>
			<div class="desktop-only container container-90">
				<div class="row">
					<div class="col l4">
						<a class="header-logo" href="/" title="beshitza.ru">
							<img src="/img/logo_header.jpg">
						</a>
					</div>
					<div class="header-menu col l5">
						<nav class="menu">
							<a class="item" ng-click="header.scrollTo('section#section1')">отель</a>
							<a class="item" ng-click="header.scrollTo('section#section2')">номера</a>
							<a class="item" ng-click="header.scrollTo('section#section3')">ресторан</a>
							<a class="item" ng-click="header.scrollTo('section#section4')">фитнес-клуб&nbsp</a>
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
<div class="slide-menu-element" ng-class="{'active':header.slideMenuState}" ng-swipe-left="header.setState(false)">
	<nav class="menu">
		<a class="item" ng-click="header.setState(false); header.scrollTo('section#section1')">отель</a>
		<a class="item" ng-click="header.setState(false); header.scrollTo('section#section2')">номера</a>
		<a class="item" ng-click="header.setState(false); header.scrollTo('section#section3')">ресторан</a>
		<a class="item" ng-click="header.setState(false); header.scrollTo('section#section4')">фитнес-клуб&nbsp</a>
	</nav>
</div>