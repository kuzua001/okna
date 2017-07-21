<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/21/17
 * Time: 6:48 AM
 */

namespace frontend\components;


class ControllerMetadataGrabber extends MetadataGrabber
{
    protected $methodNamePattern = '/public function action(.*?)\(/';
    protected $classNamePattern  = '/((.*)Controller).php/';
    protected $classNamespace    = 'frontend\controllers';
}