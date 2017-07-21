<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/21/17
 * Time: 6:55 AM
 */

namespace frontend\components;


use yii\db\Query;

class MetadataMapper
{
    private $grabbers = [];

    function MetadataMapper()
    {

    }

    function addGrabber(MetadataGrabber $grabber, MetadataMapper $mapper = null)
    {
        $grabber->setMapper($mapper);
        $this->grabbers[] = $grabber;
    }

    /**
     * Возвращает какие классы конкретного граббера сейчас хранятся в бд
     * @param MetadataGrabber $grabber
     *
     * @return array
     */
    private function getStoredClasses(MetadataGrabber $grabber)
    {
        $mapping = $grabber->getMapping();
        if ($mapping->hasClassMapping()) {
            $query = new Query();
            $query->select('id, ' . $mapping->getClassNameField())
                ->from($mapping->getClassTableName());
            return $query->all();
        }

        return [];
    }

    public function  test()
    {

        var_dump($this->getStoredClasses(new ControllerMetadataGrabber()));
    }
}