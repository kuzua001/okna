<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/25/17
 * Time: 2:19 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class PageParams extends ActiveRecord
{

    public static function tableName()
    {
        return 'cms_page_params';
    }

    public function setup(Page $page)
    {
        try {
            $data = unserialize($page->params_data);
            foreach ($data as $key => $value) {
                if (isset($this->$key)) {
                    $this->$key = $value;
                }
            }

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}