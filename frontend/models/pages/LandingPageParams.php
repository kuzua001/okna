<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/30/17
 * Time: 9:10 AM
 */

namespace frontend\models\pages;

use frontend\models\PageParams;
use frontend\models\ParamField;

class LandingPageParams extends PageParams
{

    /**
     * @var $sectionsParams (SectionParams)[]
     * @title Параметры секций
     * @type (HotelMainSectionParams)[]
     */
    protected $sectionsParams;

    public function getSectionsParams()
    {
        return $this->sectionsParams;
    }

    public function addSection(SectionParams $sectionParams)
    {
        $this->sectionsParams[] = $sectionParams;
    }

    public function emptySections() {
        $this->sectionsParams = [];
    }
}