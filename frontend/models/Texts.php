<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 6:38 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Class Texts
 * @property $id int
 * @property $key string
 * @property $lang string
 * @property $value string
 * @property $created_at DateTime
 * @property $updated_at DateTime
 * @property $is_html boolean
 * @package frontend\models
 */
class Texts extends ActiveRecord
{

}