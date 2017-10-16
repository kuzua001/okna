<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 9:44 PM
 */

namespace frontend\models\cms;

use frontend\components\MetadataExtractor;
use yii\db\ActiveRecord;

/**
 * Class Action
 * @property $id integer
 * @property $controller_id integer
 * @property $action_name string
 * @package frontend\models
 */
final class Actions extends ActiveRecord
{
    private $controllerName = null;

    public function afterFind()
    {
        $this->controllerName = MetadataExtractor::getClassName(MetadataExtractor::CONTROLLER_MAPPING, $this->controller_id);
        parent::afterFind();
    }

    public static function tableName()
    {
        return 'cms_actions';
    }

    public static function id($actionId)
    {
        return self::findOne($actionId);
    }

    public function getRoute()
    {
        $classParts = explode('\\', $this->controllerName);
        $classShortName = end($classParts);
        $controllerShortName = mb_strtolower(str_replace('Controller', '', $classShortName));
        return $controllerShortName . "/" . mb_strtolower($this->action_name);
    }
}