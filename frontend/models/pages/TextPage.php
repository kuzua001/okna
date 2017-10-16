<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages;


use Faker\Provider\Text;
use frontend\models\cms\Page;
use frontend\models\cms\PageParams;
use frontend\models\cms\ParamField;
use frontend\models\pages\params\TextPageParams;

class TextPage extends Page
{
    /**
     * @var TextPageParams $pageParams
     */
    public $pageParams;

    public function getControllerName()
    {
        return 'text_controller';
    }

    protected function initPageParams()
    {
        $this->pageParams = new TextPageParams();
    }
}