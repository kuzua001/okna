    <section class="header" ng-controller="HeaderController as header">
        <div class="content-wrapper">
            <header class="header-element">
                <div class="mobile">
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
						<div class="slide-menu-element" ng-class="{'active':header.slideMenuState}">
							<nav class="menu">
								<a class="item">отель</a>
								<a class="item">номера</a>
								<a class="item">ресторан</a>
								<a class="item">фитнес-клуб&nbsp</a>
							</nav>
						</div>
					</div>
                </div>
                <div class="desktop container container-90">
                    <div class="row">
                        <div class="col l4">
                            <a class="header-logo" href="/" title="beshitza.ru">
                                <img src="/img/logo_header.jpg">
                            </a>
                        </div>
                        <div class="header-menu col l5">
                            <nav class="menu">
                                <a class="item">отель</a>
                                <a class="item">номера</a>
                                <a class="item">ресторан</a>
                                <a class="item">фитнес-клуб&nbsp</a>
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