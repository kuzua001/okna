<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 2:19 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Умеет инициализироват свои переменные из серивализованной строки, получать список параметров
 * и подтягивать их типы из phpDoc свойств в производных классах и возвращать себя в сериализованном виде
 * Class PageParams
 * @package frontend\models
 */
class PageParams
{

    /**
     * Инициализировать объект из сериализованного представления
     * @param $serialized string
     *
     * @return bool
     */
    public function initFromSerialized($serialized)
    {
        try {
            $data = unserialize($serialized);
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }

            return true;
        } catch (\Exception $ex) {
            return false;
        }
    }

    /**
     * Привести объект к сериализованному виду
     * @return string
     */
    public function toSerialized()
    {
        return serialize($this);
    }

    /**
     * @return (ParamField)[]
     */
    public static function getFields()
    {

        /*var_dump(static::className());
        $rc = new \ReflectionClass(static::className());
        $prop = $rc->getProperties()[0];
        var_dump($prop->getDocComment());*/

        return [];
    }
}