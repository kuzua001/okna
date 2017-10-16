<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 2:19 PM
 */

namespace frontend\models\cms;

use yii\db\ActiveRecord;

/**
 * Умеет инициализироват свои переменные из серивализованной строки, получать список параметров
 * и подтягивать их типы из phpDoc свойств в производных классах и возвращать себя в сериализованном виде
 * Class PageParams
 * @package frontend\models
 */
class PageParams
{

    protected $pageParamsNamespace = 'frontend\models\pages\params';

    protected $availableInstances = [];

    /**
     * Получить availableInstances
     * @return array
     */
    public function getAvailableInstances()
    {
        return $this->availableInstances;
    }

    public function initFromArray($data, $pageFields = null) {
        $pageFields = is_null($pageFields) ? $this->toPageFieldsArr(true, false) : $pageFields;

        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)) {

                    if (!isset($pageFields[$key])) {
                        continue;
                    }
                    $item = $pageFields[$key];

                    if ($item['type'] == 'composite') {
                        $this->$key = [];
                        if (is_array($value)) {
                            foreach ($value as $itemArr) {
                                /** @var $itemInstance PageParams */
                                /** @var $instance PageParams */
                                $availableInstances = is_object($item) ? $item->getAvailableInstances() : $item['availableInstances'];
                                $instance = $availableInstances[$itemArr['type']];
                                $itemInstance = clone $instance;
                                $itemInstance->initFromArray($itemArr, $instance->getAvailableInstances());
                                array_push($this->$key, $itemInstance);
                            }
                        }
                    } else {
                        $this->$key = $value;
                    }
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
                    if (is_object($obj)) {
                        $objArr = self::getValuesWithTypes($obj);
                        $objArr['type'] = $obj->{$obj->varyingField()};
                        $ret[$key][$i] = $objArr;
                    } else {
                        $ret[$key][$i]  = $obj;
                    }
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
    public function toPageFieldsArr($asObj = false, $onlyComposite = false)
    {
        return $this->toPageFields($asObj, $onlyComposite)->getParamsArr();
    }

    /**
     * Преобразовать объект параметры страницы в объект "поля страницы"
     * @return PageFields
     */
    public function toPageFields($asObj = false, $onlyComposite = false)
    {
        $pageFields = new PageFields();
        $rc         = new \ReflectionClass(get_called_class());
        $properties = $rc->getProperties();

        foreach ($properties as $item) {
            $comment = $item->getDocComment();

            preg_match('/@type\s+(.+)\s?\n/', $comment, $typeMatch);
            preg_match('/@title\s+(.+)\s?\n/', $comment, $titleMatch);
            preg_match('/@default\s+(.+)\s?\n/', $comment, $defaultMatch);
            preg_match('/@separated.?\n/', $comment, $separatedMatch);

            $typeStr = isset($typeMatch[1]) ? $typeMatch[1] : '';

            $title     = isset($titleMatch[1]) ? $titleMatch[1] : '';
            $default   = isset($defaultMatch[1]) ? $defaultMatch[1] : '';
            $separated = isset($separatedMatch[0]) ? true : false;

            preg_match('/\(([a-zA-Z\|]*)\)\[\]/', $typeStr, $multiple);
            if (count($multiple) === 0) {
                if (ParamField::checkType($typeStr) && !$onlyComposite) {
                    $pageFields->addField($item->name, $typeStr, $title, $default, $separated);
                }
            } else {
                $classes = explode('|', $multiple[1]);
                $multiplePageFields = [];

                foreach ($classes as $class) {
                    $fullClassName = $this->pageParamsNamespace . '\\' . $class;
                    /** @var $params PageParams */
                    $params = new $fullClassName;
                    if ($asObj) {
                        $params->availableInstances = $params->toPageFieldsArr($asObj, $onlyComposite);
                    }
                    $multiplePageFields[$params->{$params->varyingField()}] = $asObj ? $params : $params->toPageFieldsArr($asObj);
                }

                $pageFields->addCompositeField($item->name, true, $multiplePageFields);
            }
        }

        $pageFields->setupValues($this);

        return $pageFields;
    }
}