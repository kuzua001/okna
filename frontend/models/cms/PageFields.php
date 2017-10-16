<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/12/17
 * Time: 4:40 PM
 */

namespace frontend\models\cms;


use yii\base\Object;

class PageFields extends Object
{
    protected $params = [];
    protected $values = null;

    const TYPE_CHECKBOX      = ParamField::TYPE_CHECKBOX;
    const TYPE_STRING        = ParamField::TYPE_STRING;
    const TYPE_IMAGE         = ParamField::TYPE_IMAGE;
    const TYPE_TEXTAREA      = ParamField::TYPE_TEXTAREA;
    const TYPE_HTML          = 'html';
    const TYPE_COMPOSITE     = 'composite';
    const TYPE_COMPOSITE_ARR = 'composite_arr';

    public function getParamsArr()
    {
        return $this->params;
    }

    public function addField($key, $type, $title = '', $default = '', $separated = false)
    {
        $this->params[$key] = [
            'key'       => $key,
            'type'      => $type,
            'title'     => $title,
            'default'   => $default,
            'separated' => $separated
        ];
    }

    public function setupValues($values)
    {
        $this->values = $values;
    }

    /**
     * @param       $key
     * @param       $isArr
     * @param array (PageFields)[] $availableInstances
     */
    public function addCompositeField($key, $isArr, array $availableInstances) {
        $this->params[$key] = [
            'key'  => $key,
            'type' => $isArr ? self::TYPE_COMPOSITE : self::TYPE_COMPOSITE_ARR,
            'availableInstances' => $availableInstances
        ];
    }

    public function __toString()
    {

        //var_dump(PageParams::getValuesWithTypes($this->values));
        //exit();

        return json_encode((object) [
            'params' => $this->params,
            'values' => PageParams::getValuesWithTypes($this->values)
        ]);
    }
}