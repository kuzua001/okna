<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/20/17
 * Time: 6:51 AM
 */

namespace frontend\components;

use yii;


abstract class MetadataGrabber implements IMetadataGrabber
{
    protected $classNamespace    = null;
    protected $classNamePattern  = null;
    protected $methodNamePattern = null;
    private   $classDir          = null;

    /**
     * @var MetadataMapping
     */
    private $mapping = null;

    /**
     * Сеттер маппера для этого граббера
     * @param MetadataMapper $mapper
     */
    public function setMapper(MetadataMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * Вернуть текущий маппер или null, если он не был установлен
     * @return MetadataMapping
     */
    public function getMapping()
    {
        return is_null($this->mapping) ? new MetadataMapping() : $this->mapping;
    }

    public function MetadataGrabber()
    {
        $this->classDir  = Yii::getAlias('@' . str_replace('\\', '/', $this->classNamespace) . '/');
    }

    /**
     * Возвращает полное название класса
     * @param $className
     *
     * @return string
     */
    public function getFullClassName($className)
    {
        return $this->classNamespace . '\\' . $className;
    }

    /**
     * @inheritdoc
     */
    public function getClassList()
    {
        $classList = [];

        if ($handle = opendir($this->classDir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && preg_match($this->classNamePattern, $file, $matches) && isset($matches[1])) {
                    $className = $this->classNamespace . '\\' . $matches[1];
                    $classList[] = $matches[1];
                }
            }

            closedir($handle);
        }

        return $classList;
    }

    /**
     * @inheritdoc
     */
    public function getMethodList($className)
    {
        $methodList = [];

        if ($handle = fopen($this->classDir . $className . '.php', "r")) {
            while (($line = fgets($handle)) !== false) {
                if (preg_match($this->methodNamePattern, $line, $matches)):
                    if (strlen($matches[1]) > 2):
                        $methodList[] = strtolower($matches[1]);
                    endif;
                endif;
            }

            fclose($handle);
        }

        return $methodList;
    }
}