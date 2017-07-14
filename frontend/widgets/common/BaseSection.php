<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/7/17
 * Time: 7:46 PM
 */

namespace frontend\widgets\common;

use Faker\Provider\Base;
use yii\base\Widget;

class BaseSection extends Widget
{
    protected $template = null;
    private $config = [];
    private $isConfigured = false;

    /**
     * @var string $title Заголовк секции
     */
    public $title;

    /**
     * @var string $content Содержимое секции, может содеражть html-код
     */
    public $content;

    /**
     * Настроить данную секцию, передав ей параметры
     * @param array $config
     * @return BaseSection
     */
    public function config($config)
    {
        $this->config = $config;
        return $this;
    }

    public function configure()
    {
        if (!$this->isConfigured) {
            foreach ($this->config as $key => $val) {
                if ($this->hasProperty($key) && $this->canSetProperty($key)) {
                    $this->$key = $val;
                }
            }

            $this->isConfigured = true;
        }
    }

    /**
     * Отобразить секцию, передав ей натсройки
     * @param $config array
     *
     * @return string
     */
    public function run()
    {
        if ($this->template === null) {
            return '';
        }

        $this->configure();

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