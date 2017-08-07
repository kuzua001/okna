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

class SectionParams extends PageParams
{
    /**
     * @var $title
     * @title Заголовок секции
     * @type string
     */
    public $title;

    /**
     * @var $sectionType
     * @title Тип секции
     * @type select
     */
    protected $sectionType;

    /**
     * Возвращает тип секции
     * @return mixed
     */
    public function getSectionType()
    {
        return $this->sectionType;
    }
}