<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 2:39 PM
 */

namespace frontend\models\pages;

use frontend\models\cms\Page;
use frontend\models\pages\params\LandingPageParams;


class LandingPage extends Page
{
    /**
     * @var LandingPageParams $pageParams
     */
    public $pageParams;

    public function getControllerName()
    {
        return 'cms_controller';
    }

    protected function initPageParams()
    {
        $this->pageParams = new LandingPageParams();
    }
}