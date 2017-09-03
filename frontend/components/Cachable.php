<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 3:15 PM
 */

namespace frontend\components;


use yii\db\Exception;
use yii\web\Controller;

trait Cachable
{
    /**
     * Включено ли сейчас кеширование (устанавливается внутри кешируемого геттера)
     * @var bool
     */
    private $cacheEnabled = false;

    /**
     * Время кеширования в секундах
     * @var null
     */
    private $cacheTime = null;


    private static $_methodCacheSettings = null;

    /**
     * Разрешить кеширование
     * @return $this
     */
    public function cacheEnable()
    {
        $this->cacheEnabled = true;
        return $this;
    }

    /**
     * Установить время кеширования
     * @param $time
     *
     * @return $this
     */
    public function setCacheTime($time)
    {
        $this->cacheTime = $time;
        return $this;
    }

    /**
     * Магический метод, который надстраивает кеширование и сбрасывает его до следующей установки
     * cache->enable()->setTime(...)
     * @param $name
     * @param array $args
     * @throws \Exception
     * @return mixed
     */
    public function __call($name, $args)
    {

        var_dump('here for the beer');

        if (is_null(self::$_methodCacheSettings)) {
            $methodCacheSettings = \Yii::$app->cache->get('cache_trait_settings');
            self::$_methodCacheSettings = empty($methodCacheSettings) ? [] : $methodCacheSettings;

            var_dump("begin!");

            \Yii::$app->controller->on(Controller::EVENT_AFTER_ACTION, function() use ($methodCacheSettings) {
                var_dump("end!");
                \Yii::$app->cache->set('cache_trait_settings', $methodCacheSettings);
            });
        }

        if (!method_exists($this, $name)) {
            throw new \Exception("unknown method [$name]");
        }

        /**
         * Подтянуть информацию о кешировании методов, которая появляется в кешах настроек кеша при первом вызове :)
         */
        if (isset(self::$_methodCacheSettings[$name])) {
            $this->cacheEnabled = true;
            $this->cacheTime = self::$_methodCacheSettings[$name];
        }

        if ($this->cacheEnabled) {
            $cacheKey = 'cache_trait_' . $name . '_' . md5(serialize($args));
            $data = \Yii::$app->cache->get($cacheKey);

            if (is_null($data)) {
                $data = call_user_func_array(array($this,$name), $args);
                \Yii::$app->cache->set($cacheKey, $data, $this->cacheTime);
            }

            $this->cacheEnabled = false;
            $this->cacheTime    = null;
        } else {
            $data = call_user_func_array(array($this,$name), $args);
            if ($this->cacheEnabled) {
                self::$_methodCacheSettings[$name] = $this->cacheTime;
            }
        }

        return $data;
    }
}