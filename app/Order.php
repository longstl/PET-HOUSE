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

    public function user(){
        return $this->belongsTo('App\User','userId');
    }

    public function getShipInformationAttribute()
    {
        return ' - '. $this->shipPhone . '<br> - '. $this->shipName . '<br> - ' . $this->shipAddress;
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
