<?php

use \yii\widgets\Menu;
use \frontend\models\menu\TopMenu;
use \frontend\models\menu\TopMenuItem;

/** @var $this \frontend\views\CmsView*/

/**
 * Меню, которое выводится, когда не знаем, что конкретно выводить в качестве меню
 */
$defaultMenu = new TopMenu();
$defaultMenu->addMenuItem(new TopMenuItem('/about', 'О нас', true));
$defaultMenu->addMenuItem(new TopMenuItem('/contacts', 'Контакты', true));

$topMenu = isset($this->topMenu) ? $this->topMenu : $defaultMenu
?>
<section class="header">
	<div class="container">
		<header class="header-element">
			<div class="hidden-lg-up">
				<div class="slide-dummy-element" ng-swipe-right="site.setMenuState(true)"></div>
				<div class="row">
					<div class="col-sm-12">
						<span class="hamburger-element" ng-click="site.toggleMenu()">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="hidden-md-down">
				<div class="row">
					<div class="header-menu col-lg-5">
						<nav class="menu">
                            <?php foreach ($topMenu->getItems() as $item) { ?>
								<?= $item->getHTML() ?>
							<?php } ?>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</div>
</section>
<div class="slide-menu-element hidden-lg-up" ng-class="{'active':site.slideMenuState}" ng-swipe-left="site.setMenuState(false)">
	<nav class="menu">
        <?php foreach ($topMenu->getItems() as $item) { ?>
            <?= $item->getHTML() ?>
        <?php } ?>
	</nav>
</div>