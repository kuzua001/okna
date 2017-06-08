<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 6:03 PM
 */

namespace frontend\components;

use frontend\models\Texts;

class AppHelper
{

    const LANG_RU = 'ru';
    const LANG_EN = 'en';

    /**
     * Получить текст
     * @param string $key
     * @param string $lang
     *
     * @return string
     */
    public static function getText($key, $lang = self::LANG_RU)
    {
        /**
         * @var \frontend\models\Texts $text
         */
        $text = Texts::find()->where('`key` = :key and lang = :lang', [':key' => $key, ':lang' => $lang])->one();

        return is_object($text) ? $text->value : '';
    }

    /**
     * Изменить текст
     * @param string $key
     * @param string $lang
     * @param string $value
     * @return string
     */
    public static function setText($key, $lang, $value)
    {
        /**
         * @var $text \frontend\models\Texts
         */
        $text = Texts::find()->where('`key` = :key and lang = :lang', [':key' => $key, ':lang' => $lang])->one();

        if (!is_object($text)) {
            $text = new Texts();
            $text->key = $key;
            $text->lang = $lang;
        }

        $text->value = $value;
        $text->save();
    }
}