<?php
namespace frontend\controllers;

use Faker\Provider\Base;
use frontend\components\AppHelper;
use frontend\models\SectionItem;
use yii\web\Controller;
use frontend\widgets\common\BaseSection;
use yii;


class LandingController extends Controller
{
    private $sectionItems = [];

    /**
     * Добавить секцию
     * @param string $name
     * @param BaseSection $section
     */
    public function addSectionItem($name, BaseSection $section, array $config)
    {
        $this->sections[$name] = new SectionItem($section, $config, $name);
    }

    public function actionIndex()
    {
        return $this->render('index.php', ['sectionItems' => $this->sectionItems]);
    }
}