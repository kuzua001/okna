<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/14/17
 * Time: 3:47 PM
 */
namespace frontend\models;

use frontend\widgets\common\Section;
use frontend\widgets\common\MainSection;


class SectionItem
{
    private $section = null;
    private $config = [];
    private $name = null;

    /**
     * SectionItem constructor.
     *
     * @param Section     $section
     * @param             $config
     * @param             $name
     */
    function __construct(Section $section, $config, $name)
    {
        $this->section = $section;
    }

    public function html()
    {
        return $this->section->config($this->config)->run();
    }

    /**
     * @return string | null
     */
    public function getName()
    {
        return $this->name;
    }
}