<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/30/17
 * Time: 9:10 AM
 */

namespace frontend\models\pages\params;

use frontend\models\cms\CmsPageParams;
use frontend\models\cms\ParamField;

class MainPageParams extends CmsPageParams
{

    /**
     * @var $slides (SectionParams)[]
     * @title Слайды главного слайдера
     * @type (SliderItemParams)[]
     */
    public $slides;
}