<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
}
