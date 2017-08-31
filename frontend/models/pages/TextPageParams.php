<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages;

use frontend\models\CmsPageParams;
use frontend\models\ParamField;

class TextPageParams extends CmsPageParams
{
    /**
     * @var $title
     * @title Заголовок страницы
     * @type string
     */
    public $title;


    /**
     * @var $content
     * @title Контент страницы
     * @type html
     */
    public $content;
}