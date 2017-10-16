<?php
use frontend\widgets\section\Section;
use yii\helpers\Html;
use frontend\models\pages\params\TextPageParams;
/** @var Section $widget */

$widget = $this->context;

/**
 * @var TextPageParams $sectionParams
 */
$sectionParams = $widget->sectionParams;
?>
<section class="text">
	<div class="content-wrapper">
		<h1><?= $sectionParams->title ?></h1>
		<div class="content">
			<?= $sectionParams->content ?>
		</div>
	</div>
</section>