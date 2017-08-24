<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/25/17
 * Time: 1:17 AM
 */

namespace frontend\models\pages;


use frontend\models\PageParams;


class SliderItemParams extends PageParams
{
    /**
     * @var $tabTitle string
     * @title Заголовок таба
     * @default Заголово
     * @type string
     */
    public $tabTitle;


    /**
     * @var $tabContent string
     * @title Контент таба
     * @default Текст
     * @type textarea
     */
    public $tabContent;

    protected $sliderItemType = 'simple_slide';

    public function varyingField()
    {
        return 'sliderItemType';
    }
}