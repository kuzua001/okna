<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages;

use frontend\models\PageParams;
use frontend\models\ParamField;

class TextPageParams extends PageParams
{
    /**
     * @var $title
     * @title Заголовок страницы
     * @type ParamField::TYPE_TEXTAREA
     */
    public $title;


    /**
     * @var $content
     * @title Контент страницы
     * @type
     */
    public $content;
}