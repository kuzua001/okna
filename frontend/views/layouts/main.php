<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
Yii::$app->language = 'ru';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
	</head>
	<body ng-app="main" ng-controller="SiteController as site" class="loading">
		<div class="modal fade" id="exampleModalLive">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Оформить заказ</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div ng-switch="site.getCart().products.length">
							<p ng-switch-when="0">
								Ваша корзина пуста
							</p>
							<p ng-switch-default>
								Ваш заказ на сумму {{ site.getCart().total }} Руб.</br>
								Позиции заказа:
							</p>
						</div>
						<div ng-if="site.getCart().products.length">
							<ul>
								<li ng-repeat="(key, product) in site.getCart().products" ng-if="product.product.name">
									{{ product.product.name }} x {{ product.quantity }}
								</li>
							</ul>

							<form>
								<div class="form-group">
									<label for="name">Имя</label>
									<input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Введите имя">
									<small id="nameHelp" class="form-text text-muted">Иван, мистер голодный, г-н многоуважаемый</small>
								</div>
								<div class="form-group">
									<label for="phone">Телефон</label>
									<input type="text" class="form-control" id="name" aria-describedby="phoneHelp" placeholder="Укажите телефон">
									<small id="phoneHelp" class="form-text text-muted">+7 (999) 999-99-99</small>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Вызвать курьера</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
					</div>
				</div>
			</div>
		</div>
		<?php $this->beginBody() ?>
			<div class="content">
				<?= $this->render("//partial/top") ?>
					<?= $content ?>
			</div>
			<?= $this->render("//partial/bottom") ?>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>