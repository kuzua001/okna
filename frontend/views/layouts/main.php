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
						<h5 class="modal-title">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Modal body text goes here.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save changes</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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