<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/7/17
 * Time: 7:46 PM
 */

namespace frontend\widgets\section;

use frontend\models\pages\params\SectionParams;
use yii\base\Widget;

class Section extends Widget
{
    const TYPE_TEXT_PAGE      = 'text_section';
    //const TYPE_SLIDER_SETION  = ''

    /**
     * @var SectionParams Параметры секции (объект любого унаследованного класса)
     */
    public $sectionParams;

    public function run()
    {
        switch ($this->sectionParams->getSectionType()) {
            case self::TYPE_TEXT_PAGE:
                return $this->render('common/text');
        }
    }
}