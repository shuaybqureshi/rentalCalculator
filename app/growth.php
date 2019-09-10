<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class growth extends Model
{
    protected $table="growth";
    protected $fillable = [
        'report_id', 'income', 'property_value','expenses' 
    ];  
    
    //
}
