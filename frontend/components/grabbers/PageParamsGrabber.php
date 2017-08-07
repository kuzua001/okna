<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/21/17
 * Time: 6:48 AM
 */

namespace frontend\components\grabbers;

use frontend\components\MetadataGrabber;
use frontend\components\MetadataMapping;


class PageParamsGrabber extends MetadataGrabber
{
    protected $classNamePattern  = '/((.*)PageParams).php/';
    protected $classNamespace    = 'frontend\models\pages';

    public static function getDefaultMapping()
    {
        $mapping = new MetadataMapping();
        $mapping->setClassNameField('class_name');
        $mapping->setClassTableName('cms_pages');

        return $mapping;
    }
}