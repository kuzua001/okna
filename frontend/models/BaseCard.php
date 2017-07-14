<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * BaseCard is the base model for every difficult card.
 */
class BaseCard extends Model {

    /**
     * @var $elementClass string
     */
    protected $elementClass = '';

    protected $templateName = '';

    /**
     * @return array
     */
    public function formTemplateParams()
    {
        return [
            'element_class' => $this->elementClass
        ];
    }

    /**
     * @return string
     */
    public function render()
    {
        $params = $this->formTemplateParams();
        return $this->render("//partial/blocks/service/rooms_description");
    }
}