<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exp_inc extends Model
{
    protected $table="exp_inc";
    protected $fillable = [
        'report_id', 'rental_income', 'other_income','electricity' , 'water','gas', 'report_id', 
        'insurance', 'taxes','other' , 'vacancy','capex', 'management' 
    ];  
}
