<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_info extends Model
{
    protected $table="purchase_info";
    protected $fillable = [
        'report_id', 'purchase_price', 'arv','closing_cost',
        'repairs', 'down_payment', 'amortization'
    ];  //
}
