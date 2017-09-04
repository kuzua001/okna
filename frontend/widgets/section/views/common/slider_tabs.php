<?php
use frontend\widgets\section\Section;
use frontend\models\pages\SliderTabsSectionParams;
use yii\helpers\Html;
use frontend\widgets\buttons\DetailButton;
use \frontend\models\pages\SliderItemParams;

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
            <div class="row slider-group row-flex row-flex-desktop<?= $sectionParams->isRight ? ' reverse-order' : ''?>">
                <div class="col l8 m12 s12">
                    <div class="slider slider-element">
                        <ul class="slides">
                            <?php foreach ($sectionParams->slides as $slide) { ?>
								<?php
								/** @var $slide SliderItemParams */
								?>
                                <li>
                                    <img src="<?= $slide->image ?>">
									<?php if ($slide->hasCard) { ?>
										<div class="caption left-align">
											<h3 class="elegant-title-element small black-text">
												<span class="first"><?= $slide->cardTitleFirst ?></span>
												<span class="second"><?= $slide->cardTitleSecond ?></span>
												<span class="third"><?= $slide->cardTitleThird ?></span>
											</h3>
											<div class="property-item-element">
												<i class="property-icon" style="background-image: url('/img/icons/clock.png'); width: 22px; height: 27px;"></i>
												<span class="property-description">Круглосуточно</span>
											</div>
											<div class="property-item-element">
												<i class="property-icon" style="background-image: url('/img/icons/phone.png'); width: 22px; height: 27px;"></i>
												<span class="property-description">8(4832)40-00-00</span>
											</div>
										</div>
									<?php } ?>
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
                    <?= DetailButton::widget([
                        'hasDetailButton'  => $sectionParams->hasDetailButton,
                        'detailButtonText' => $sectionParams->detailButtonText,
                        'detailButtonLink' => $sectionParams->detailButtonLink,
                        'blackText'        => true,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</section>
