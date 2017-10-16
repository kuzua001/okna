<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages;

use frontend\models\cms\Page;
use frontend\models\pages\params\MainPageParams;


class MainPage extends Page
{
    /**
     * @var MainPageParams $pageParams
     */
    public $pageParams;

    public function getControllerName()
    {
        return 'main_controller';
    }

    protected function initPageParams()
    {
        $this->pageParams = new MainPageParams();
    }
}