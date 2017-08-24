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

    protected $pageParamsNamespace = 'frontend\models\pages';

    public function initFromArray($data) {
        $pageFields = $this->toPageFieldsArr(true);

        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $item = [];

                foreach ($pageFields as $item) {
                    if ($item['key'] == $key);
                    break;
                }

                if (empty($item)) {
                    continue;
                }

                if ($item['type'] == 'composite') {
                    $this->$key = [];
                    foreach ($value as $itemArr) {
                        /** @var $itemInstance PageParams */
                        $itemInstance = clone $item['availableInstances'][$itemArr['type']];
                        $itemInstance->initFromArray($itemArr);
                        array_push($this->$key, $itemInstance);
                    }
                } else {
                    $this->$key = $value;
                }
            }
        }

        return true;
    }

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
     * @return bool|string
     */
    public function varyingField()
    {
        return false;
    }

    /**
     * Привести объект к сериализованному виду
     * @return string
     */
    public function toSerialized()
    {
        return serialize($this);
    }

    public static function getValuesWithTypes($pageParams)
    {
        $ret = [];
        foreach ($pageParams as $key => $val) {
            if (is_array($val)) {
                $ret[$key] = [];
                foreach ($val as $i => $obj) {
                    $objArr = self::getValuesWithTypes($obj);
                    $objArr['type'] = $obj->{$obj->varyingField()};
                    $ret[$key][$i] = $objArr;
                }
            } else {
                $ret[$key] = $val;
            }
        }

        return $ret;
    }

    /**
     * Преобразовать объект параметры страницы в массив полей страницы
     * @return array
     */
    public function toPageFieldsArr($asObj = false)
    {
        return $this->toPageFields($asObj)->getParamsArr();
    }

    /**
     * Преобразовать объект параметры страницы в объект "поля страницы"
     * @return PageFields
     */
    public function toPageFields($asObj = false)
    {
        $pageFields = new PageFields();
        $rc         = new \ReflectionClass(get_called_class());
        $properties = $rc->getProperties();

        foreach ($properties as $item) {
            $comment = $item->getDocComment();

            preg_match('/@type\s+(.+)\s?\n/', $comment, $typeMatch);
            preg_match('/@title\s+(.+)\s?\n/', $comment, $titleMatch);
            preg_match('/@default\s+(.+)\s?\n/', $comment, $defaultMatch);

            $typeStr = isset($typeMatch[1]) ? $typeMatch[1] : '';

            $title   = isset($titleMatch[1]) ? $titleMatch[1] : '';
            $default = isset($defaultMatch[1]) ? $defaultMatch[1] : '';

            preg_match('/\(([a-zA-Z\|]*)\)\[\]/', $typeStr, $multiple);
            if (count($multiple) === 0) {
                if (ParamField::checkType($typeStr)) {
                    $pageFields->addField($item->name, $typeStr, $title, $default);
                }
            } else {
                $classes = explode('|', $multiple[1]);
                $multiplePageFields = [];

                foreach ($classes as $class) {
                    $fullClassName = $this->pageParamsNamespace . '\\' . $class;
                    /** @var $params PageParams */
                    $params = new $fullClassName;
                    $multiplePageFields[$params->{$params->varyingField()}] = $asObj ? $params : $params->toPageFieldsArr();
                }

                $pageFields->addCompositeField($item->name, true, $multiplePageFields);
            }
        }

        $pageFields->setupValues($this);

        return $pageFields;
    }
}