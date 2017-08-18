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

class ControllerMetadataGrabber extends MetadataGrabber
{
    protected $methodNamePattern = '/public function action(.*?)\(/';
    protected $classNamePattern  = '/((.*)Controller).php/';
    protected $classNamespace    = 'frontend\controllers';

    /**
     * Перевести название типа LoginForm в вид login-form (yii2)
     * @param $actionName
     *
     * @return string
     */
    public static function toRouteNotation($actionName)
    {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $actionName));
    }

    public static function getDefaultMapping()
    {
        $mapping = new MetadataMapping();
        $mapping->setClassNameField('controller_name');
        $mapping->setClassTableName('cms_controllers');
        $mapping->setParentClassNameField('controller_parent');
        $mapping->setMethodTableName('cms_actions');
        $mapping->setMethodClassIdField('controller_id');
        $mapping->setMethodNameField('action_name');

        return $mapping;
    }
}