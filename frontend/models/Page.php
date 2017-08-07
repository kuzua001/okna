<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 3:18 PM
 */

namespace frontend\models;

use frontend\components\MetadataExtractor;
use frontend\components\ObjectBuilder;
use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\db\Query;

/**
 * Class Page
 * @package frontend\models
 * @property $id integer
 * @property $url string
 * @property $action_id integer
 * @property $pages_id integer
 * @property $params_data string
 */
class Page extends ActiveRecord
{
    public function fields()
    {
        return ['id', 'url', 'action_id', 'name'];
    }
    /**
     * @var PageParams
     */
    public $pageParams = null;

    protected function initPageParams()
    {

    }

    public function afterFind()
    {
        $this->initPageParams();
        if (!is_null($this->pageParams)) {
            $this->pageParams->initFromSerialized($this->params_data);
        }
    }

    /**
     * @return (ParamFierd)[]
     */
    public function getPageFields()
    {
        return empty($this->pageParams) ? $this->pageParams->getFields() : [];
    }

    public static function tableName()
    {
        return 'cms_page';
    }

    public function beforeSave($insert)
    {
        $this->params_data = $this->pageParams->toSerialized();

        return parent::beforeSave($insert);
    }

    /**
     * Возвращает страницу по ее id
     * @param $pageId
     * @return Page|null
     */
    public static function id($pageId)
    {
        $pageClassName = MetadataExtractor::getClassName(MetadataExtractor::PAGES_MAPPING, $pageId);
        try {
            $page = $pageClassName::findOne($pageId);
            if (is_subclass_of($page, self::className())) {
                return $page;
            }
        } catch (Exception $ex) {
        }

        return null;
    }

    public static function getRoutes()
    {
        $routes = [];
        $pages = self::find()->all();

        foreach ($pages as $page) {

            $routes[] = [
                'pattern' => $page->url,
                'route' => Actions::id($page->action_id)->getRoute(),
                'defaults' => [
                    'pageId' => $page->id,
                ]
            ];
        }

        return $routes;
    }
}