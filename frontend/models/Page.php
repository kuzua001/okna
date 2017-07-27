<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 3:18 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Class Page
 * @package frontend\models
 * @property $id integer
 * @property $url string
 * @property $action_id integer
 * @property $params_id integer
 * @property $params_data string
 */
class Page extends ActiveRecord
{
    public static function tableName()
    {
        return 'cms_page';
    }
}