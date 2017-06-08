<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/7/17
 * Time: 7:46 PM
 */

namespace frontend\widgets\common;

use yii\base\Widget;
use yii\helpers\Html;

class SectionWidget extends Widget
{
    public $type;
    public $title;
    public $data;

    public function init()
    {
        parent::init();

    }
}