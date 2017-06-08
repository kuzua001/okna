<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/7/17
 * Time: 7:46 PM
 */

namespace frontend\widgets\common;

use yii\base\Widget;

class BaseSection extends Widget
{
    protected $template = null;

    /**
     * @var string $title Заголовк секции
     */
    public $title;

    /**
     * @var string $content Содержимое секции, может содеражть html-код
     */
    public $content;

    public function run()
    {
        if ($this->template === null) {
            return '';
        }

        return $this->render($this->template);
    }

    final public function title() {

//        if ()
//
//        if (...) {
//            $html = Html::tag('section-header-eleemnt', HtmlPurifier::process($this->title));
//        } else {
//            $html = Html::encode($this->title);
//        }
//
//        //if (...)
//        //$html .= '<mta name='keywords'>'

        return $this->title;
    }

    final public function content() {
        return $this->content;
    }
}