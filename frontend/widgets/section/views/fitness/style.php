<?php
use frontend\widgets\section\Section;
use frontend\models\pages\FitnessStyleSectionParams;
use yii\helpers\Html;

/** @var Section $widget */

$widget = $this->context;

/**
 * @var FitnessStyleSectionParams $sectionParams
 */
$sectionParams = $widget->sectionParams;
?>
<section class="fitness-style">
    <div class="content-wrapper">
        <img class="bg large" src="/img/backgrounds/style-fitness-bg.jpg">
        <div class="container container-90">
            <div class="row clear">
                <div class="col l6 s12 push-l6">
                    <div class="right-content-block-element">
                        <h2 class="elegant-title-element">
                            <span class="first"><?= $sectionParams->sloganFirst ?></span>
                            <span class="second"><?= $sectionParams->sloganSecond ?></span>
                            <span class="third tight"><?= $sectionParams->sloganThird ?></span>
                        </h2>
                        <?= $sectionParams->content ?>
                        <div class="card-element">
                            <header>
                                <?= $sectionParams->cardTitle ?>
                            </header>
                            <section class="content">
                                <?= $sectionParams->cardContent ?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
