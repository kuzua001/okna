<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 3:35 PM
 */

namespace frontend\widgets\common;

use frontend\widgets\common\BaseSection;

class MainSection extends BaseSection
{
    protected $template = 'main_section';

    /**
     * @var array $contactsList список контактной информации, должен в каждом элементе содержать ключи title, class, value
     */
    public $contactsList;

    /**
     * @var string $welcomeHeader Заголовок приветсвия
     */
    public $welcomeHeader;
    /**
     * @var string $welcomeContent Содержание приветсвия
     */
    public $welcomeContent;

    /**
     * @var string $mainSloganFirst
     */
    public $mainSloganFirst;

    /**
     * @var string $mainSloganSecond
     */
    public $mainSloganSecond;

    /**
     * @var string $mainSloganThird
     */
    public $mainSloganThird;

    /**
     * @var string $rightBlockHeader
     */
    public $rightBlockHeader;

    /**
     * @var string $rightBlockContent
     */
    public $rightBlockContent;

}