<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 7:48 PM
 */

namespace frontend\components;


use yii\db\Exception;

class ObjectBuilder
{
    const CONTROLLER_MAPPING = 'controller';

    private static $allowedTypes = [
        self::CONTROLLER_MAPPING
    ];

    /**
     * Возвращает mapping
     * @param $objectType
     *
     * @return MetadataMapping|null
     */
    private function getMapping($objectType)
    {
        switch ($objectType) {
            case self::CONTROLLER_MAPPING:
                return ControllerMetadataGrabber::getDefaultMapping();
        }
    }

    /**
     * @param $objectType
     * @param $classId
     * @return null|object
     */
    public static function create($objectType, $classId)
    {
        if (in_array($objectType, self::$allowedTypes)) {
            $mapping = self::getMapping($objectType);
            $className = MetadataMapper::getStoredClassById($mapping, $classId);
            try {
                $instance = new $className();
                return $instance;
            } catch (Exception $ex) {
            }
        }

        return null;
    }
}