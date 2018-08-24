<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 8/24/2018
 * Time: 1:10 AM
 */

namespace App;


class CartItem
{
    public function getTotalPriceWithFormat(){
        return sprintf('%s', number_format($this->product->price * $this->quantity, 0));
    }
}