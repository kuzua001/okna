<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/21/17
 * Time: 7:01 AM
 */

namespace frontend\components;

/**
 * Класс, описывающий настройки сбора метаданных о классах и методах
 * Class MetadataMapping
 * @package frontend\components
 */
class MetadataMapping
{
    /**
     * @var string|null Навзаени таблицы с классами
     */
    private $classTableName = null;

    /**
     * @var string|null Название поля, где хранится имя класса
     */
    private $classNameField = null;

    /**
     * @var string|null Название поля, где хранится имя родителя (если необходимо)
     */
    private $parentClassNameField = null;

    /**
     * @var string|null Название таблицы с методами
     */
    private $methodTableName = null;

    /**
     * @var string|null Название поля, где хранится имя метода
     */
    private $methodNameField = null;

    /**
     * @var string|null Название поля id класса (в таблице с методами)
     */
    private $methodClassIdField = null;

    /**
     * @return null|string
     */
    public function getMethodClassIdField()
    {
        return $this->methodClassIdField;
    }

    /**
     * @param null|string $methodClassIdField
     */
    public function setMethodClassIdField($methodClassIdField)
    {
        $this->methodClassIdField = $methodClassIdField;
    }

    /**
     * @return null|string
     */
    public function getClassTableName()
    {
        return $this->classTableName;
    }

    /**
     * @param string $classTableName
     */
    public function setClassTableName($classTableName)
    {
        $this->classTableName = $classTableName;
    }

    /**
     * @return null|string
     */
    public function getClassNameField()
    {
        return $this->classNameField;
    }

    /**
     * @param string $classNameField
     */
    public function setClassNameField($classNameField)
    {
        $this->classNameField = $classNameField;
    }

    /**
     * @return null|string
     */
    public function getParentClassNameField()
    {
        return $this->parentClassNameField;
    }

    /**
     * @param string $parentClassNameField
     */
    public function setParentClassNameField($parentClassNameField)
    {
        $this->parentClassNameField = $parentClassNameField;
    }

    /**
     * @return null|string
     */
    public function getMethodTableName()
    {
        return $this->methodTableName;
    }

    /**
     * @param string $methodTableName
     */
    public function setMethodTableName($methodTableName)
    {
        $this->methodTableName = $methodTableName;
    }

    /**
     * @return null|string
     */
    public function getMethodNameField()
    {
        return $this->methodNameField;
    }

    /**
     * @param string $methodNameField
     */
    public function setMethodNameField($methodNameField)
    {
        $this->methodNameField = $methodNameField;
    }

    /**
     * Заполнены ли настройки маппинга для классов
     * @return bool
     */
    public function hasClassMapping()
    {
        return !empty($this->classTableName) && !empty($this->classNameField);
    }

    /**
     * Заполнены ли настройки маппинга для методов
     * @return bool
     */
    public function hasMethodMapping()
    {
        return !empty($this->methodTableName) && !empty($this->methodNameField) &&!empty($this->methodClassIdField);
    }


}