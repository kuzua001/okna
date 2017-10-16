<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages\params;

use frontend\models\pages\params\SectionParams;
use frontend\widgets\section\Section;

class TextPageParams extends SectionParams
{

    protected $sectionType = Section::TYPE_TEXT_PAGE;

    /**
     * @var $content
     * @title Контент страницы
     * @type textarea
     */
    public $content;
}