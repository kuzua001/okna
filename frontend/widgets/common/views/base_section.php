<?php
use frontend\widgets\common\BaseSection;
use yii\helpers\Html;

/** @var BaseSection $widget */

$widget = $this->context;
?>
<section>
    <h2><?= Html::encode($widget->title); ?></h2>
    <p>
        <?= $widget->content; ?>
    </p>
</section>