<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/3/17
 * Time: 10:30 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class Domain extends ActiveRecord
{
    public static function tableName()
    {
        return 'cms_domains';
    }
}