<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/1/17
 * Time: 12:21 AM
 */

namespace frontend\views;

use frontend\models\menu\TopMenu;
use yii\web\View;

class CmsView extends View {
    /**
     * SEO description
     * @var string
     */
    public $description;

    /**
     * SEO title
     * @var string
     */
    public $title;

    /**
     * Верхняя менюха
     * @var TopMenu
     */
    public $topMenu;

    /**
     * Дефолтный цвет фона
     * @var string
     */
    public $bgColor;
}