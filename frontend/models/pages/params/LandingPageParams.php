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

class LandingPageParams extends CmsPageParams
{

    /**
     * @var $sectionsParams (SectionParams)[]
     * @title Параметры секций
     * @type (TextPageParams)[]
     */
    public $sectionsParams;


    /**
     * @var $hasContacts boolean
     * @title Показывать контактную информацию
     * @type checkbox
     */
    public $hasContacts;

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