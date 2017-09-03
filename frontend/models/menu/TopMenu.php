<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/3/17
 * Time: 5:10 PM
 */
namespace frontend\models\menu;

/**
 * Class TopMenu
 */
class TopMenu
{
    /**
     * Спсиок элементов меню
     * @var $items TopMenuItem[]
     */
    private $items;

    /**
     * Добавить элемент меню
     * @param TopMenuItem $item
     */
    public function addMenuItem(TopMenuItem $item)
    {
        $this->items[] = $item;
    }

    /**
     * Возвращает список элементов меню
     * @return TopMenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
}