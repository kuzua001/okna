<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/21/17
 * Time: 5:52 PM
 */

namespace frontend\widgets\popup;


use yii\base\Widget;

class Popup extends Widget
{
    const TYPE_DEFAULT = 'default';

    public $type = self::TYPE_DEFAULT;
    /**
     * @var $title Заголовок попапа
     */
    public $title;

    /**
     * @var $class CSS класс для враппера попапа
     */
    public $class = '';

    /**
     * @param array $config
     */
    public static function begin($config = [])
    {
        self::render('top', $config);
    }

    public static function end()
    {
        parent::end();
        self::render('bottom');
    }


    public function run()
    {
        $tpls = [
            self::TYPE_DEFAULT => 'default'
        ];

        $html =  $this->render('top', (array) $this);
        $html .= $this->render($tpls[$this->type]);
        $html .= $this->render('bottom');

        return $html;
    }
}