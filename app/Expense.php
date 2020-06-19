<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $guarded = [];

    public function setAmountAttribute($value)
    {
        $this->attributes['amount']  = $value * 100;
    }

    public function getAmountAttribute($value)
    {
        return str_replace('.', ',', number_format($value / 100, 2));
    }
}
