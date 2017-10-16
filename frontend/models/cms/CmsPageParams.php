<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/27/17
 * Time: 6:38 PM
 */

namespace frontend\models\cms;


class CmsPageParams extends PageParams
{
    /**
     * @var $metaTitle string
     * @title Title (SEO)
     * @type string
     */
    public $metaTitle;

    /**
     * @var $metaDescription string
     * @title Description (SEO)
     * @type textarea
     */
    public $metaDescription;
}