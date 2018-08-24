<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function details()
    {
        return $this->hasMany('App\OrderDetail', 'orderId');
    }

    public function getShipInformationAttribute()
    {
        return ' - '. $this->shipphone . '<br> - '. $this->shipname . '<br> - ' . $this->shipaddress;
    }

    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case -1:
                return 'Canceled';
                break;
            case 0:
                return 'Processing';
                break;
            case 1:
                return 'Accepted';
                break;
            case 2:
                return 'Done';
                break;
            default:
                return 'Unknown';
                break;
        }
    }
}
