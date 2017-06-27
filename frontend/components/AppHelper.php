<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 6/8/17
 * Time: 6:03 PM
 */

namespace frontend\components;

use frontend\models\Texts;
use yii;
use yii\helpers\Html;

class AppHelper
{

    private static $_textsDefault = null;

    const LANG_RU = 'ru';
    const LANG_EN = 'en';

    private static $_availableLanguages = [self::LANG_RU, self::LANG_EN];

    /**
     * Получить текст
     * @param string $key
     * @param string $lang
     * @param boolean $editable можно ли редактировать данный текст и оборачивать его в спец.теги
     *
     * @return string
     */
    public static function getText($key, $lang = self::LANG_RU, $editable = true)
    {
        if (self::$_textsDefault === null) {
            $keys = [];
            foreach (self::$_availableLanguages as $lang) {
                $keys = array_unique(array_merge($keys, array_keys(Yii::$app->params['texts'][$lang])));
            }

            foreach ($keys as $key) {
                $value = '';
                self::$_textsDefault[$key] = [];

                foreach (self::$_availableLanguages as $lang) {
                    $value = isset(Yii::$app->params['texts'][$lang][$key]) ? Yii::$app->params['texts'][$lang][$key] : $value;
                    self::$_textsDefault[$key][$lang] = $value;
                }

            }
        }
        /**
         * @var \frontend\models\Texts $text
         */
        $text = Texts::find()->where('`key` = :key and lang = :lang', [':key' => $key, ':lang' => $lang])->one();

        $textVal = is_object($text) ? $text->value : isset(self::$_textsDefault[$key][$lang]) ? self::$_textsDefault[$key][$lang] : '';
        return $editable ? Html::tag('span', $textVal, [
            'data-key' => $key,
            'data-lang' => $lang,
            'hover' => '',
            'editable-text' => '',
            'class' => 'editable-text-element',
        ]) : $textVal;
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