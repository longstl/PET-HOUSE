<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSpa extends Model
{
    //
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
