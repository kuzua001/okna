<?php
use frontend\widgets\section\Section;
use frontend\models\pages\SliderTabsSectionParams;
use yii\helpers\Html;

/** @var Section $widget */

$widget = $this->context;

/**
 * @var SliderTabsSectionParams $sectionParams
 */
$sectionParams = $widget->sectionParams;
?>
<section class="events"  id="section3">
    <div class="content-wrapper">
        <div class="container container-90">
            <div class="row">
                <div class="col l12 m12 s12">
                    <h2 class="centered-title-element black-text">
                        <?= $sectionParams->title ?>
                    </h2>
                </div>
            </div>
            <div class="row row-flex row-flex-desktop">
                <div class="col l8 m12 s12">
                    <div class="slider slider-element">
                        <ul class="slides">
                            <?php foreach ($sectionParams->slides as $slide) { ?>
                                <li>
                                    <img src="/img/canteen.jpg">
                                    <div class="caption left-align">
                                        <h3 class="elegant-title-element small black-text">
                                            <span class="first">Европейская</span>
                                            <span class="second">Высокая кухня</span>
                                            <span class="third">незабываемая атмосфера</span>
                                        </h3>
                                        <div class="property-item-element">
                                            <i class="property-icon" style="background-image: url('/img/icons/clock.png'); width: 22px; height: 27px;"></i>
                                            <span class="property-description">12-24 ч. ежедневно</span>
                                        </div>
                                        <div class="property-item-element">
                                            <i class="property-icon" style="background-image: url('/img/icons/phone.png'); width: 22px; height: 27px;"></i>
                                            <span class="property-description">+7 (499) 678-01-41</span>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col l4  m12 s12">
                    <div class="elegant-card-element">
                        <ul class="tab-list-element">
                            <?php foreach ($sectionParams->slides as $i => $slide) { ?>
                                <li class="<?= $i == 0 ? 'active' : ''?>">
                                    <span class="link"><?= $slide->tabTitle ?></span>
                                    <section class="content">
                                        <?= $slide->tabContent ?>
                                    </section>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row more-row">
                <div class="col l12 center">
                    <button class="detail-button-element black-text"><?= $sectionParams->detailButtonText ?></button>
                </div>
            </div>
        </div>
    </div>
</section>
