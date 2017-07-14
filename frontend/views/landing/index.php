<?php

use frontend\widgets\common\BaseSection;
use frontend\models\SectionItem;

/** @var array $sectionItems */
?>
<?php foreach ($sectionItems as $item) { ?>
    <?= /* @var SectionItem $item*/ $item->html()?>
<?php } ?>
