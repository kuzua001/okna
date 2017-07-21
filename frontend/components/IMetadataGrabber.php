<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/20/17
 * Time: 6:48 AM
 */
namespace frontend\components;

interface IMetadataGrabber
{
    /**
     * Возвращает массив полных названий классов
     * @return array|mixed
     */
    public function getClassList();

    /**
     * Возвращает массив полных названий методов кдасса
     * @param $className string полное название класса
     * @return array|mixed
     */
    public function getMethodList($className);
}