<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 3:35 PM
 */

namespace frontend\widgets\common;

use frontend\widgets\common\BaseSection;

class StyleFitnessSection extends BaseSection
{
    protected $template = 'style_fitness_section';

    /**
     * @var string $rightBlockHeader
     */
    public $rightBlockHeaderFirst;


    /**
     * @var string $rightBlockContent
     */
    public $rightBlockContent;

    /**
     * @var string $rightBlockCardHeader
     */
    public $rightBlockCardHeader;


    /**
     * @var string $rightBlockCardTitle
     */
    public $rightBlockCardTitle;


}