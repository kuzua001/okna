<?php

use frontend\widgets\section\Section;
use frontend\models\SectionItem;
use frontend\models\pages\LandingPage;

/** @var LandingPage $page */
?>
<?php if (is_array($page->pageParams->getSectionsParams())) { ?>
    <?php foreach ($page->pageParams->getSectionsParams() as $sectionParams) { ?>
        <?= Section::widget([
            'sectionParams' => $sectionParams
        ]) ?>
    <?php } ?>
<?php } ?>
