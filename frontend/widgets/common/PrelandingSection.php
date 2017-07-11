<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 3:35 PM
 */

namespace frontend\widgets\common;

use frontend\widgets\common\BaseSection;

class PrelandingSection extends BaseSection
{
    protected $template = 'prelanding_section';

    /**
     * @var string $mainSloganThird
     */
    public $mainSloganThird;

    /**
     * @var array $slideShowImages
     */
    public $slideShowImages;


    /**
     * @var string $cardContent;
     */
    public $cardContent;
}