<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/21/17
 * Time: 6:55 AM
 */

namespace frontend\components;


use yii\base\Model;
use yii\db\Exception;
use yii\db\Query;

class MetadataMapper
{
    private $grabbers = [];

    function addGrabber(MetadataGrabber $grabber, MetadataMapping $mapping = null)
    {
        if ($mapping !== null) {
            $grabber->setMapping($mapping);
        }

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

    /**
     * Возвращает какие методы класса конкретного граббера сейчас хранятся в бд
     * @param MetadataGrabber $grabber
     * @param integer $classId
     * @return array
     */
    private function getStoredMethods(MetadataGrabber $grabber, $classId)
    {
        $mapping = $grabber->getMapping();
        if ($mapping->hasMethodMapping()) {
            $query = new Query();
            $query->select('id, ' . $mapping->getMethodNameField())
                ->from($mapping->getMethodTableName())
                ->where($mapping->getMethodClassIdField() . ' = :class_id', [
                    'class_id' => $classId
                ]);
            return $query->all();
        }

        return [];
    }

    /**
     * Возвращает список существующий в директориях проекта классов, соответствующий настройкам граббера
     * @param MetadataGrabber $grabber
     *
     * @return array|mixed
     */
    private function getExistingClasses(MetadataGrabber $grabber)
    {
        return $grabber->getClassList();
    }

    /**
     * Возвращает список существующий методов в одном из классов проекта, соответствующему настройкам граббера
     * @param MetadataGrabber $grabber
     * @param string  $className
     *
     * @return array|mixed
     */
    private function getExistingMethods(MetadataGrabber $grabber, $className)
    {
        return $grabber->getMethodList($className);
    }

    /**
     * Обновить метаданые классов для определенного граббера, возвращает успех операции
     * @param MetadataGrabber $grabber
     * @return boolean
     */
    public function updateClassesMetadata(MetadataGrabber $grabber)
    {
        $existing      = $this->getExistingClasses($grabber);
        $storedItems   = $this->getStoredClasses($grabber);
        $stored        = [];
        $storedIdIndex = [];

        $mapping = $grabber->getMapping();
        $specifyParentClass = !empty($mapping->getParentClassNameField());

        if (!$mapping->hasClassMapping()) {
            return false;
        }

        try {
            foreach ($storedItems as $item) {
                $className = $item[$mapping->getClassNameField()];;
                $id        = $item['id'];
                $stored[]  = $className;
                $storedIdIndex[$className] = $id;
            }
        } catch (Exception $ex) {
            return false;
        }

        $toAdd    = array_diff($existing, $stored);
        $toRemove = array_diff($stored, $existing);

        $itemsToAdd  = [];
        $idsToRemove = [];

        foreach ($toAdd as $className) {
            $item = [$className];

            if ($specifyParentClass) {
                $item[] = get_parent_class($className);
            }

            $itemsToAdd[] = $item;
        }

        foreach ($toRemove as $className) {
            $idsToRemove[] = $storedIdIndex[$className];
        }

        if (count($itemsToAdd)) {
            $insertFields = [$mapping->getClassNameField()];
            if ($specifyParentClass) {
                $insertFields[] = $mapping->getParentClassNameField();
            }

            $insertQuery = new Query();
            $insertQuery->createCommand()->batchInsert($mapping->getClassTableName(), $insertFields, $itemsToAdd)->execute();
        }

        if (count($idsToRemove)) {
            $deleteQuery = new Query();
            $deleteQuery->createCommand()->delete($mapping->getClassTableName(), [
                'id' => $idsToRemove
            ])->execute();
        }

        return true;
    }

    /**
     * Вернуть хранящийя внутри класс по его id
     * @param MetadataMapping $mapping
     * @param integer $classId
     * @return string|boolean
     */
    public static function getStoredClassById(MetadataMapping $mapping, $classId)
    {
        $query = new Query();
        $query->select($mapping->getClassNameField())
            ->from($mapping->getClassTableName())
            ->where('id = :id', ['id' => $classId]);
        return $query->scalar();
    }

    /**
     * Обновить метаданные методов класса $className, возвращает успех операции
     * @param MetadataGrabber $grabber
     * @param int $classId
     * @return boolean
     */
    public function updateMethodsMetadata(MetadataGrabber $grabber, $classId)
    {
        $mapping = $grabber->getMapping();
        if (!$mapping->hasMethodMapping()) {
            return false;
        }

        $className = self::getStoredClassById($mapping, $classId);
        if ($className === false) {
            return false;
        }

        $existing      = $this->getExistingMethods($grabber, $className);
        $storedItems   = $this->getStoredMethods($grabber, $classId);
        $stored        = [];
        $storedIdIndex = [];

        try {
            foreach ($storedItems as $item) {
                $methodName = $item[$mapping->getMethodNameField()];
                $id         = $item['id'];
                $stored[]   = $methodName;
                $storedIdIndex[$methodName] = $id;
            }
        } catch (Exception $ex) {
            return false;
        }

        $toAdd    = array_diff($existing, $stored);
        $toRemove = array_diff($stored, $existing);

        $itemsToAdd  = [];
        $idsToRemove = [];

        foreach ($toAdd as $methodName) {
            $item = [$methodName, $classId];
            $itemsToAdd[] = $item;
        }

        foreach ($toRemove as $methodName) {
            $idsToRemove[] = $storedIdIndex[$methodName];
        }

        if (count($itemsToAdd)) {
            $insertFields = [$mapping->getMethodNameField(), $mapping->getMethodClassIdField()];

            $insertQuery = new Query();
            $insertQuery->createCommand()->batchInsert($mapping->getMethodTableName(), $insertFields, $itemsToAdd)->execute();
        }

        if (count($idsToRemove)) {
            $deleteQuery = new Query();
            $deleteQuery->createCommand()->delete($mapping->getMethodTableName(), [
                'id' => $idsToRemove
            ])->execute();
        }

        return true;
    }

    public function updateAll()
    {
        foreach ($this->grabbers as $grabber)
        {
            $this->updateClassesMetadata($grabber);
            foreach ($this->getStoredClasses($grabber) as $item) {
                $classId = $item['id'];
                $this->updateMethodsMetadata($grabber, $classId);
            }
        }
    }
}