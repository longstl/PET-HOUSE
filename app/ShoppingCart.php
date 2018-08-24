<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 8/24/2018
 * Time: 1:09 AM
 */

namespace App;


class ShoppingCart
{

    /**
     * ShoppingCart constructor.
     */
    function __construct()
    {
        $this->items = array();
    }

    function getTotalMoney(){
        $total_money = 0;
        foreach ($this->items as $item){
            $total_money += $item->product->price * $item->quantity;
        }
        return $total_money;
    }

    function getTotalMoneyWithFormat(){
        return sprintf('%s', number_format($this->getTotalMoney(), 0));
    }
}