<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/18/17
 * Time: 6:54 AM
 */

namespace frontend\models;


use yii\db\ActiveRecord;

/**
 * Class Product
 * @package frontend\models
 * @property $is_top boolean
 * @property $name string
 * @property $price integer
 * @property $weight integer
 * @property $img string
 */
class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @return Product[]
     */
    public static function getTop()
    {
        return self::find()->where('is_top = 1')->asArray()->all();
    }
}