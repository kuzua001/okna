<?php
use frontend\widgets\popup\Popup;
use yii\helpers\Html;

/** @var Popup $widget */

$widget = $this->context;
?>
<div class="popup-element active" ng-model="show" ng-class="{active: show}" ng-init="show = true">
    <div class="wrapper<?= $widget->class ? ' ' . $widget->class : ''?>">
		<span class="close" ng-click="show = !show">x</span>
		<header>
			<span class="title"><?= Html::encode($widget->title); ?></span>
		</header>
		<section>

